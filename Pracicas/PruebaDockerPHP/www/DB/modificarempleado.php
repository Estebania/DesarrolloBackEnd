<!DOCTYPE html>
<?php
include("basedatos.php");
$conexionbd = conectar_bd();

$query = "SELECT id,nombre,edad FROM empleado WHERE id=".$_GET['empleadoid']." LIMIT 1;";
$resultado = mysqli_query($conexionbd, $query);
mysqli_close($conexionbd);

$registro= mysqli_fetch_assoc($resultado);

?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Modificar Empleado</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="post" action="actualizarempleado.php">
        <label>Nombre</label><input type="text" name="nombre" value="<?php echo $registro['nombre']?>"></br>
        <label>Edad</label><input type="number" name="edad" value="<?php echo $registro['edad']?>"></br>
        <input type="hidden" name="empleadoid" value="<?php echo $registro['id']?>"></br>
        <input type="submit" value="Actualizar Empleado">
        
    </form>
</body>
</html>