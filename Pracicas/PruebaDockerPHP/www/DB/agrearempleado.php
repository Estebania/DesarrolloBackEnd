<?php
include("basedatos.php");


if(!empty($_POST['nombre'])&& !empty($_POST['edad'])){

    $conexionbd = conectar_bd();
    $query = "INSERT INTO empleado (nombre,edad) VALUES ('" . $_POST['nombre'] . "','" . $_POST['edad'] . "');";
    $exequte = mysqli_query($conexionbd,$query);

    if($exequte){
        header('Location:listaempleados.php');
    }
    else{
        header('Location:nuevoempleado.php');
    }
}
else{
    header('Location:nuevoempleado.php');
}
?>