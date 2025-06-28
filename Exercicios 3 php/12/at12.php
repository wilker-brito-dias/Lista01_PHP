<?php
/*
### **12. Validador de número de telefone**

- Entrada: número com DDD.
- Lógica: verifica se começa com `27`, `11`, `21`, etc. (pode usar `substr()`).
 */
$tel = $_GET["tel"];
$ddd = substr($tel, 0, 2);

if(($ddd === "27") || ($ddd === "11") || ($ddd === "21") ){
    echo "numero valido, o ddd é $ddd";

}else{
    echo "numero invalido, pois o ddd é $ddd";
}


?>