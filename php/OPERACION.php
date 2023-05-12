<?php

$valora = 10;
$valorb = 15;
if ($valora<$valorb){
    echo "el valor 2 es el mayor ";
}
else {
    echo "el primer valor es el mayor";
}
echo "<br>";
echo $valora + $valorb;
echo "<br>";

echo "while";
$variable = 1;
echo "<br>";
while ($variable <=25){
    echo $variable++;
}

echo "<br>";
$i = 5;
switch ($i) {
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
    default:
       echo "i no es igual a 0, 1 ni 2";
}

echo "<br>";
for($variablefor = 1;$variablefor<=10;$variablefor++){
    echo $variablefor;
}
?>