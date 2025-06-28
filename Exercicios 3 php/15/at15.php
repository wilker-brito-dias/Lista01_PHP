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

if ($venda <= 1000) { 
    echo "sua comissão sera de 5%"; 
}elseif (($venda >= 1001) && ($venda<=5000)) {
     echo "Sua comissão será de 10%";
}elseif ($venda > 5000) {
     echo " sua comissão será de 15%";
}
?>