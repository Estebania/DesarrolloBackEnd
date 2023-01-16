<?php



$edades [0] = 17;
$edades [1] = 29;
$edades [2] = 24;
$i = 0;
while ($i < 3) {
    if ($edades[$i] > 18) {


        echo "La pesona puede ser registrada<br>";

    } elseif ($edades[$i] >= 15) {
        echo "La pesona puede recibir informacon por correo<br>";
    } else {

        echo "La pesona no  puede ser registrada<br>";
    }
    $i++;
}
?>