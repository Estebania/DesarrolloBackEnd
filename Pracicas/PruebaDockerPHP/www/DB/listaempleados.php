<!DOCTYPE html>
<?php
include("basedatos.php");
$conexionbd = conectar_bd();

$query = "SELECT id,nombre,edad FROM empleado;";
$resultado = mysqli_query($conexionbd, $query);
mysqli_close($conexionbd);

?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Lista de empleados</h1>
     <form method="get">
    <table style="padding: 0.7%; margin: 0.11%; position: absolute; border-spacing: 0.55ch; border-color: black; border: 1px solid; borde">
    
        <?php 
        
        while ($registro = mysqli_fetch_assoc($resultado)) {
            echo '<tr><td>'.$registro['nombre'].'</td>  <td>'.$registro['edad'].' años  </td>';
            echo '<td><a href ="modificarempleado.php?empleadoid=' . $registro['id'] . '">Modificar  </a></td>';
            echo '<td><a href ="eliminarempleado.php?empleadoid=' . $registro['id'] . '">Eliminar</a></li></div></td></tr>';
        }
        ?>
    </table>
    </form>
</body>
</html>