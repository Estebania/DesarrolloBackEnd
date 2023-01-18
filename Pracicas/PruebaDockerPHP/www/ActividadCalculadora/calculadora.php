<?php
$valor1 = $_GET['numero1'];
$valor2 = $_GET['numero2'];
$operacion = $_GET['operacion'];

switch($operacion){
    case "suma":
        echo "Suma";
        suma($valor1, $valor2);
        
        break;
    case "resta":
        echo "Resta";
        resta($valor1, $valor2);
        break;
    case "multiplicacion":
        echo "Multiplicacion";
        multiplicacion($valor1,$valor2);
        break;
    case "division":
        echo "Division";
        division($valor1, $valor2);
        break;
    default:
        echo "Debe seleccionar una opcion";

}

function suma($valor1,$valor2){
    $resultado = $valor1 + $valor2;

    echo "Resultado: " . $resultado;
}
function resta($valor1,$valor2){
    $resultado = $valor1 - $valor2;

    echo "Resultado: " . $resultado;
}
function division($valor1,$valor2){
    $resultado = $valor1 / $valor2;

    echo "Resultado: " . $resultado;
}
function multiplicacion($valor1,$valor2){
    $resultado = $valor1 + $valor2;

    echo "Resultado: " . $resultado;
}
 
?>