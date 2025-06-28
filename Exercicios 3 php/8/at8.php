<?php
/*
8. Determinar se o ano é bissexto
Entrada: ano.
Lógica:
php
CopiarEditar
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0)


*/
$ano = $_GET["ano"];
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0){
    echo "o ano é bissexto";
}else{
 echo "o ano não é bissexto";
}

?>