<?php
/*
### **4. Verificar se uma senha digitada está correta**

- Entrada: senha (campo tipo `password`).
- Lógica: comparação simples com senha fixa.
*/
$senha = $_GET["senha"];
$pass = "senha";

if($senha == $pass){
    echo "a senha está correta";
}else{
    echo "senha incorreta";
}
?>