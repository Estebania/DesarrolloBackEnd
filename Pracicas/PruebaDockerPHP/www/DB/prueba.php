<?php
include("basedatos.php");

$conexionbd = conectar_bd();
if (!$conexionbd) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Connected successfully";
}
mysqli_close($conexionbd);




?>