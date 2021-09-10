Requerimientos:

Primer paso crear la base de datos:


Script crear la base de datos:

CREATE DATABASE base_de_datos;

Script para crear tabla áreas:

CREATE TABLE `bd_empresa`.`areas` ( `id` INT NOT NULL AUTO_INCREMENT COMMENT 'Identificador del área' , `nombre` VARCHAR(255) NOT NULL COMMENT 'Nombre del área de la empresa' , PRIMARY KEY (`id`)) ENGINE = InnoDB;

Script para crear tabla empleado_rol:

CREATE TABLE `bd_empresa`.`empleado_rol` ( `empleado_id` INT(11) NOT NULL COMMENT 'Identificador del empleado' , `rol_id` INT(11) NOT NULL COMMENT 'Identificador del rol' ) ENGINE = InnoDB;

Script para crear tabla empleados:

CREATE TABLE `bd_empresa`.`empleados` ( `id` INT NOT NULL AUTO_INCREMENT COMMENT 'Identificador del empleado' , `nombre` VARCHAR(255) NOT NULL COMMENT 'Nombre completo del empleado. Campo tipo Text.Solo debe permitir letras con o sin tilde y espacios. No se admiten caracteres especiales ni números.\r\nObligatorio.' , `email` VARCHAR(255) NOT NULL COMMENT 'Correo electrónico del empleado. Campo de tipo Text|Email. Solo permite una estructura de correo. Obligatorio.' , `sexo` CHAR(1) NOT NULL COMMENT 'Campo de tipo Radio Button. M para Masculino. F para Femenino. Obligatorio.' , `area_id` INT(11) NOT NULL COMMENT 'Area de la empresa a la que pertenece el empleado. Campo de tipo Select.\r\nObligatorio.' , `boletin` INT(11) NOT NULL COMMENT '1 para Recibir boletín. 0 para No recibir boletín. Campo de tipo Checkbox.\r\nOpcional.' , `descripcion` TEXT NOT NULL COMMENT 'Se describe la experiencia del empleado. Campo de tipo textarea. Obligatorio.' , PRIMARY KEY (`id`)) ENGINE = InnoDB;

Script para crear tabla roles:

CREATE TABLE `bd_empresa`.`roles` ( `id` INT NOT NULL AUTO_INCREMENT COMMENT 'Identificador del rol' , `nombre` VARCHAR(255) NOT NULL COMMENT 'Nombre del Rol' , PRIMARY KEY (`id`)) ENGINE = InnoDB;
Creando llave foránea en empleados para relacionar con área:
ALTER TABLE `bd_empresa`.`empleados` ADD INDEX `FK_id_relacion` (`id`);
Crear relación empleados con área:
ALTER TABLE `empleados` ADD FOREIGN KEY (`area_id`) REFERENCES `areas`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
Creación foráneas para relación con la tabla empleado_rol:
ALTER TABLE `bd_empresa`.`empleado_rol` ADD INDEX `FK_id_empleado` (`empleado_id`);
