<?php
/*
### **5. Sistema de login simples**

- Entrada: usuário e senha.
- Lógica: se o usuário for "admin" e a senha "123", permitir acesso; senão, negar.
 */
$user = $_GET["user"];
$pass = $_GET["pass"];
$usuario = "admin";
$senha = "123";

if($user == $usuario && $pass == $senha){
    echo "Acesso permitido";
}else{
    echo "Acesso negado";
}
?>