<?php
session_start();
require('../controllers/validaadmin.php');

require('../controllers/conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_delete = " DELETE FROM contacto WHERE idContacto = $id";
    $result = mysqli_query($conexion, $sql_delete);

if(!$result){
    die('query failed');
}

    header("location: tbcontact.php");
}
