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

    public function consultarAcudienteId($conexion, $id){
        $query = "CALL consultarAcudienteId ('$id')";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Consulta realizada";
        }else{
            $respuesta = "Error encontrado, el error es: ". mysqli_error($conexion);
        }
        return $consulta;
    }

    public function actualizarAcudienteId($conexion, $id, $nombre, $apellido, $fechaNacimiento, $tel, $direccion, $id_municipio){
        $query = "CALL actualizarAcudienteId ('$id','$nombre','$apellido','$fechaNacimiento','$tel','$direccion','$id_municipio')";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Modificación realizada";
        }else{
            $respuesta = "Error encontrado, el error es: ". mysqli_error($conexion);
        }
        return $consulta;
    }

    public function eliminarAcudienteId($conexion, $id){
        $query = "CALL eliminarAcudienteID ('$id');";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Acudiente eliminado";
        }else{
            $respuesta = "Error encontrado, el error es: ". mysqli_error($conexion);
        }
        return $consulta;
    }

}