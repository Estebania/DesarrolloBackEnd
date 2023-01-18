<?php

function conectar_bd(){
    $servidor = "db";//nombre del servidor configurado en docker-compose
    $nombrebd = "empresa";
    $usuario = "root";
    $contrasena = "test";

    $conexion =  mysqli_connect($servidor, $usuario, $contrasena,$nombrebd);
    

    return $conexion;

}


?>