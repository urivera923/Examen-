<?php 
    class metodosPadre{

        public function insertarDatos($datos)
        {
            $c = new Conectar();
            $conexion = $c->conexion();

            $sql = "INSERT INTO t_autos (marca, color, descripcion) VALUES ('$datos[0]', $datos[1], $datos[2])";
            return $resultado = mysqli_query($conexion, $sql);
        }

        public function monstarDatos($sql)
        {
            $c=new conectar();
            $conexion=$c->conexion();
            $result=mysqli_query($conexion, $sql);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        public function eliminarDatos($id)
        {
            $c = new conectar();
            $conexion=$c->conexion();

            $sql = "DELETE FROM t_autos WHERE id_autos ='$id'";
            return  $result = mysqli_query($conexion, $sql);
        }
    }
?>