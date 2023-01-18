<?php
include("basedatos.php");


if(!empty($_POST['nombre'])&& !empty($_POST['edad'])&& !empty($_POST['empleadoid'])){

    $conexionbd = conectar_bd();
    $query = "UPDATE empleado SET nombre='".$_POST['nombre']."', edad='".$_POST['edad']."' WHERE id=".$_POST['empleadoid'].";";
    $exequte = mysqli_query($conexionbd,$query);

    if($exequte){
        header('Location:listaempleados.php');
    }
    else{
        //header('Location:nuevoempleado.php');
        echo $_POST['nombre'];
    echo $_POST['edad'];
    echo $_POST['empleadoid'];
    
        echo 'error 1';
        die("Connection failed: " . mysqli_connect_error());
    }
}
else{
    //header('Location:nuevoempleado.php');
    echo $_POST['nombre'];
    echo $_POST['edad'];
    echo $_POST['empleadoid'];
    echo 'error 2 ';
}
?>