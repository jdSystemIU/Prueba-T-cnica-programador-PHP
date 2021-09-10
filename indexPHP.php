<?php
include('conexion.php');

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prototipo de formulario para crear y modificar</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/e639b95e7d.js" crossorigin="anonymous"></script>

</head>
 
<body>
  <form action="indexPHP.php" method="GET">

  <h2><em>Crear empleado</em></h2>  

  <div class="alert alert-primary" role="alert">
  Los campos con asteriscos (*) son obligatorios
</div>
<div class="form-group">

  <div class="form-group">
     <p>Nombre completo *<input type="text" name="nombre" placeholder="Nombre completo del empleado"></p>
  </div>
      <div class="form-group">
      <p>Correo electrónico *<input type="text" name="correo" placeholder="Correo electrónico"></p>
      </div>

      <div class="form-group">
      <div class="checkbox-inline">
  <label>
     <p>Sexo *

    <input type="checkbox" value="M">
    Masculino
    <input type="checkbox" value="F">
    Femenino
    </p>
  </label>
</div>

      <div class="form-group">
     <p>Area *

  <select>
    <option value =1>Administración</option>
  </select>
      </p>

      <div class="form-group">
     <p>Descripcion *<input type="text" name="descripcion" placeholder="Descripcion de la experiencia del empleado"></p>
  </div>
</div>
  <div class="checkbox-inline">
  <label>
    <input type="checkbox" value="boletin">
    Deseo recibir boletín informativo
  </label>
</div>
<div>
<p></p>
<div class="checkbox-inline">
  <label>
     Roles *

    <input type="checkbox" value="Desarrollador">
    Profesional de proyectos - Desarrollador
    
  </label>
  <div>
    <input type="checkbox" value="gerenteEstrategico">
    Gerente estratégico
    
  </div>
    <input type="checkbox" value="auxiliarAdministrativo">
    Auxiliar administrativo
</div>
<p></p>
     <input class="btn btn-primary" name="Guardar" type="submit" value="Guardar" />
  </form>
  <i class="fas fa-camera"></i>

</div>
<h3><em>Lista de empleados</em></h3>  
<table>
  <thead>
    <th>id</th>
    <th>nombre</th>
    <th>email</th>
    <th>sexo</th>
    <th>area_id</th>
    <th>boletin</th>
    <th>descripcion</th>
  </thead>
  <tbody>
    <?=mostrarDatos($conexion); ?>
  </tbody>
</table>
</body>
</html>