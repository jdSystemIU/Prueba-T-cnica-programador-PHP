<?php
    $conexion = mysqli_connect('localhost', 'root','','bd_empresa')or die(mysqli_error($mysqli));
    
    guardar($conexion);

    function guardar($conexion){
        if(isset($_GET['Guardar'])){
            insert($conexion);
        }
    }

    function insert($conexion){
        $nombre = $_GET['nombre'];
        $correo = $_GET['correo'];

        $query = "INSERT INTO `empleados` (`id`, `nombre`, `email`, `sexo`, `area_id`, `boletin`, `descripcion`) 
        VALUES (NULL, '$nombre ', '$correo', 'M', '1', '1', 'ninguna')";
        
        mysqli_query($conexion, $query);
        mysqli_close($conexion);
        header("Location: indexPHP.php");

    }

    function eliminar($conexion){
        $id = $_GET['id'];
        $consultar = "DELETE FROM `empleados` WHERE `empleados`.`id` = $id";
        mysqli_close($conexion);
        header("Location: indexPHP.php");
    }

    function mostrarDatos($conexion){
        $query = "SELECT * FROM `empleados`";
        $result = mysqli_query($conexion, $query);
        while($fila = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<tr>".$fila['id'];
            echo "<tr>".$fila['nombre'];
            echo "<tr>".$fila['email'];
            echo "<tr>".$fila['sexo'];
            echo "<tr>".$fila['area_id'];
            echo "<tr>".$fila['boletin'];
            echo "<tr>".$fila['descripcion'];
            echo "<tr>";
        }
        mysqli_close($conexion);
    }

?>