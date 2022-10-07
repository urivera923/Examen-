<?php

    class Conectar{

        private $servidor = "localhost";
        private $usuario = "root";
        private $password = "";
        private $bd = "autos";

        public function conexion(){
            $conexion = mysqli_connect(

                    $this->servidor,
                    $this->usuario,
                    $this->password,
                    $this->bd
            );

            return $conexion;
        }
    }

    $obj = new Conectar();


    if ($obj->conexion()) {
        // echo "Conexion con exito";
    } else {
        echo "Error al conectar";
    }

?>