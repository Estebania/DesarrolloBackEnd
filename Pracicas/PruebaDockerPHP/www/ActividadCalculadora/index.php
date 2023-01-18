<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculadora</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="get" action="calculadora.php">
        <label>Numero 1:</label> <input type="text" name="numero1"></br>
        <label>Numero 2:</label> <input type="text" name="numero2"></br>
       <label>Operacion</label>
        <select name="operacion">
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicacion">multiplicacion</option>
            <option value="division">division</option>
        </select></br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>