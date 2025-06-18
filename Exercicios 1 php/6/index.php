<?php
$valor1 = 250;
$desconto = 10;
$valordesc= $desconto / 100;
$valordesconto= $valor1 * $valordesc;
$valorfinal = $valor1 - $valordesc;
echo "O valor do produto é $valor1 R$ <br>";

echo "Você tem $desconto % de desconto <br>";

echo "O valor do desconto no produto será de $valordesconto R$ <br>";

echo "O valor do produto com desconto é $valorfinal R$";


?>