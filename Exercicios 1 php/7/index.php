<?php

$salariobase = 3400;
$percentualaumento = 7;


$percentual = $percentualaumento / 100;
$aumento = $salariobase * $percentual;
$novosalario = $salariobase + $aumento;

echo "O salário base é de $salariobase R$ <br>" ;
echo "Terá um aumento de  $percentualaumento % <br>";
echo "O valor do aumento será de $aumento R$ <br>";
echo "Logo o novo salário será $novosalario R$"

?>