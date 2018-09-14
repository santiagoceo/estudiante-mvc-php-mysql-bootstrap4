<?php

class Acudiente {

    public function consultar($conexion){
        $query = "SELECT * FROM vistaacudiente";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Consulta realizada";
        }else{
            $respuesta = "Error encontrado, el error es: ". mysqli_error($conexion);
        }
        return $consulta;
    }

    public function registrar($conexion, $nombre, $apellido, $fechaNacimiento, $tel, $direccion, $id_municipio){
        $query = "CALL insertarAcudiente ('$nombre', '$apellido', '$fechaNacimiento', '$tel', '$direccion', '$id_municipio')";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Consulta realizada";
        }else{
            $respuesta = "Error encontrado, el error es: ". mysqli_error($conexion);
        }
        echo $respuesta;
        return $consulta;
    }

}