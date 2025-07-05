<?php
/*
### **15. Cálculo de comissão por faixa de venda**

- Entrada: valor da venda.
- Lógica:
    - Até R$ 1.000 → 5%
    - Até R$ 5.000 → 10%
    - Acima de R$ 5.000 → 15%
 */
$venda = $_GET["venda"];
$com1 = $venda * (5 / 100);
$com2 = $venda * (10 / 100);
$com3 = $venda * (15 / 100);



if ($venda <= 1000) { 
    echo "sua comissão será de 5%, tendo um valor de $com1 "; 
}elseif (($venda >= 1001) && ($venda<=5000)) {
     echo "Sua comissão será de 10%, tendo um valor de $com2";
}elseif ($venda > 5000) {
     echo " sua comissão será de 15%, tendo um valor de $com3";
}
?>
