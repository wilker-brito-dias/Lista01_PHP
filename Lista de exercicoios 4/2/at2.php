<?php
/*
### **2. Contagem Regressiva (while)**

Crie um formulário com um campo para o usuário informar um número. O script deve exibir uma contagem regressiva até 0
 com `while`.
 */

$numero = $_GET["numero"];

for ($numero; $numero > -1 ; $numero --) { 
    echo $numero . "<br>
    ";
}



?>