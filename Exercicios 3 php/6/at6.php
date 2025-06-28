<?php
/*
### **6. Identificar maior número entre dois valores**

- Entrada: dois números.
- Lógica: `if / else` para identificar o maior.
*/
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];

if($n1>$n2){
    echo "O primeiro numero é maior que o segundo ";
}else{
    echo "O segundo numero é maior que o primeiro";
}


?>