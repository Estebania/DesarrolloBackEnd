<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulario de ejemplo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    $edad = 22;
    echo "Edad ".$edad?>
      <form method="get" action="receptionGet.php">
        Usuario:    <input type="text" name="user" ></br>
        Contraseña: <input type="password" name="pwd"></br>
        <input type="submit" value="Enviar">

      </form>
    
</body>
</html>