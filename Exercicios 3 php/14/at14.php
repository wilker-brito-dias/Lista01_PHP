<?php
/*
14. Sistema de avaliação por estrelas
Entrada: número de estrelas (1 a 5).
Lógica:
php
CopiarEditar
if ($estrela == 5) { echo "Excelente"; }
elseif ($estrela == 4) { echo "Muito bom"; }
// ...

 */
$estrela = $_GET["estrela"];

if ($estrela == 5) { 
    echo "Excelente"; 
}elseif ($estrela == 4) {
     echo "Muito bom";
}elseif ($estrela == 3) {
     echo "bom";
}elseif ($estrela == 2) {
     echo "ruim";
}elseif ($estrela <= 1) {
     echo "pessimo";
}
?>