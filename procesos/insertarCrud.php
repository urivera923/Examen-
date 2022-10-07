<?php
    require_once "../app/conexion.php";
    require_once "../app/metodosCrud.php";
    $obj = new metodosPadre();

// echo "Hola";
    $mazda = $_POST["mazda"];
    print_r($mazda);
    $bmw = $_POST["bmw"];
    print_r($bmw);
    $subura = $_POST["subura"];
    print_r($subura);
    $rojo = $_POST["txtRojo"];
    print_r($rojo);
    $azul = $_POST["Azul"];
    print_r($azul);
    $negro = $_POST["txtNegro"];
    $des = $_POST["txtdescripcion"];
    print_r($des);

    $datos = array(
        $mazda,
        $bmw,
        $subura,
        $rojo,
        $azul,
        $negro,
        $des

    );
    if ($obj->insertarDatos($datos) == 1) {
        header("location:../index.php");
    } else {
        echo "Fallo al agregar";
    }

?>