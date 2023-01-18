<?php
include("basedatos.php");


if(!empty($_GET['empleadoid'])){

    $conexionbd = conectar_bd();
    $query = "DELETE FROM empleado WHERE id=" . $_GET['empleadoid'] .";";
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