<?php
/*
### **1. Verificar se o número é positivo, negativo ou zero**

- Entrada: número.
- Lógica: `if / elseif / else`.
 */
$numero = $_GET['numero'];

if($numero >0){

    echo "O Numero é positivo";
}elseif($numero == 0){
    echo "O numero é neutro";
}else{
    echo "O numero é negativo";
}


?>