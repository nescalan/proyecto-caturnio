<?php

$mysqli = new mysqli('localhost', 'root', '', 'db_caturnio');

if ($mysqli->connect_errno) { // Indica el número del error
    die('Lo siento hubo un problema con el servidor');
} else {
    // Codigo
    echo 'conexion EXITOSA';
}
$mysqli->query("INSERT INTO tbl_personal(id_personal, cedula, nombre, departamento, telefono, estado) VALUES (null, '401820626', 'nathalia', 'administrativo', '83148921', '1' ) ") or die($mysqli->error);

// $mysqli->(INSERT INTO `tbl_personal`(`id_personal`, `cedula`, `nombre`, `departamento`, `telefono`, `estado`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]'))