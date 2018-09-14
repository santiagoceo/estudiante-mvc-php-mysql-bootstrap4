<?php

class Municipio {

    public function consultar($conexion){
        $query = "SELECT * from vistamunicipio";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Consulta realizada";
        }else{
            $respuesta = "Error encontrado, el error es: ". mysqli_error($conexion);
        }
        return $consulta;
    }

    public function consultarMunDep($conexion){
        $query = "SELECT * from vistamundep";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Consulta realizada";
        }else{
            $respuesta = "Error encontrado, el error es: ". mysqli_error($conexion);
        }
        return $consulta;
    }

}