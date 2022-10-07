<?php 
    
    require_once "../app/conexion.php";
    require_once "../app/metodosCrud.php";

    $id = $_GET['id'];
    echo $id;

    $obj = new metodosPadre();
    if ($obj->eliminarDatos($id) == 1) {
        header("location:../index.php");
    } else {
        echo "Fallo al Eliminar";
    }
?> 