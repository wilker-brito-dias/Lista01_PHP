<?php
/*

​
9. Calcular reajuste salarial com base em faixas
Entrada: salário.
Lógica:
Até R$ 1.500: +20%
Até R$ 3.000: +15%
Acima de R$ 3.000: +10%
 */

 $salario = $_GET["salario"];
 $s1 = $salario + ($salario * 20 / 100);
 $s2 = $salario + ($salario * 15 / 100);
 $s3 = $salario + ($salario * 10 / 100);

 if (($salario >=0 ) && ($salario <=1500 ) ){
  echo "Como o salário é R$ $salario, seu ajuste será de 20%, tendo um salario novo, no valor de" . number_format($s1, 2);
}elseif (($salario >=1501 ) && ($salario <=3000 ) ){
    echo "Como o salário é R$ $salario, seu ajuste será de 15%, tendo um salario novo, no valor de" . number_format($s2, 2);
}elseif ($salario >=3001 ){
    echo "Como o salário é R$ $salario, seu ajuste será de 10%, tendo um salario novo, no valor de" . number_format($s3, 2);
}else{
    echo "Digite um valor coerente para o salario";
}
?>