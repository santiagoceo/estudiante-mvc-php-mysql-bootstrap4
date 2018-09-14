<?php

class Estudiante {

    public function consultar($conexion){
        $query = "SELECT * FROM vistaestudiante";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Consulta realizada";
        }else{
            $respuesta = "Error encontrado, el error es: ". mysqli_error($conexion);
        }
        return $consulta;
    }

    public function registrar($conexion, $nombre, $apellido, $fechaNacimiento, $idMunicipio, $idAcudiente){
        $query = "CALL insertarEstudiante('$nombre','$apellido','$fechaNacimiento','$idMunicipio','$idAcudiente');";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Consulta realizada";
        }else{
            $respuesta = "Error encontrado, el error es: ". mysqli_error($conexion);
        }
        return $consulta;
    }

    public function consultarEstudianteId($conexion, $id){
        $query = "CALL consultarEstudianteId('$id');";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Consulta realizada";
        }else{
            $respuesta = "Error encontrado, el error es: ". mysqli_error($conexion);
        }
        return $consulta;
    }

    public function actualizarEstudianteId($conexion, $id, $nombre, $apellido, $date, $idMunicipio, $idAcudiente){
        $query = "CALL actualizarEstudianteID ('$id','$nombre','$apellido','$date','$idMunicipio','$idAcudiente');";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Consulta realizada";
        }else{
            $respuesta = "Error encontrado, el error es: ". mysqli_error($conexion);
        }
        return $consulta;
    }

    public function desactivarEstudianteId($conesion){

    }
}