<?php

class Departamento {

    public function consultar($conexion){
        $query = "SELECT * FROM vistadepartamento";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Consulta realizada";
        }else{
            $respuesta = "Error encontrado, el error es: ". mysqli_error($conexion);
        }
        return $consulta;
    }

}