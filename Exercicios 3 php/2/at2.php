<?php
/*
### **2. Verificar se o número é par ou ímpar**

- Entrada: número.
- Lógica: `if (n % 2 == 0)`.
 */
$numero = $_GET["numero"];

if ($numero % 2 == 0){
    echo "O numero $numero, é par";
}else{
    echo "O numero $numero, é impar";
}
?>