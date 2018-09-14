<?php

class Conexion {
    public function conectar(){
        $host = "localhost";
        $user = "root";
        $password = "root";
        $db = "estudiante";
        $conexion = mysqli_connect($host, $user, $password, $db);
        mysqli_query($conexion, "SET NAMES 'utf8'"); //Agregar tildes

        if($conexion == false){
            die("Error".mysqli_connect_error);
        }

        return $conexion;
    }
}