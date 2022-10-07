<?php
    require_once "../app/conexion.php";
    require_once "../app/metodosCrud.php";
    
    // echo "Hola";
    $marca = $_POST["txtMarca"];
    $color = $_POST["txtColor"];
    $descripcion = $_POST["txtDescripcion"];
    
    $datos = array(
        $marca,
        $color,
        $descripcion
    );
    
    print_r($datos);
    
    
    $obj = new metodosPadre();
    if ($obj->insertarDatos($datos) == 1) {
        header("location:../index.php");
    } else {
        echo "Fallo al agregar";
    }

?>