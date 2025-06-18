<?php
/*
12. **Média Ponderada:**
    - Crie variáveis para três notas e seus respectivos pesos (ex: `nota1 = 7`, `peso1 = 2`, `nota2 = 8`, `peso2 = 3`, `nota3 = 6`, `peso3 = 5`).
    - Calcule a média ponderada usando a fórmula: `((nota1 * peso1) + (nota2 * peso2) + (nota3 * peso3)) / (peso1 + peso2 + peso3)`.
    - Exiba a média ponderada.
*/
$nota1 = 7;
$peso1 = 2;
$nota2 = 8;
$peso2 = 3;
$nota3 = 6;
$peso3 = 5;

$media = (($nota1*$peso1) + ($nota2*$peso2) + ($nota3*$peso3)) / ($peso1 + $peso2 + $peso3);

echo "A média ponderada das suas notas é de " .number_format($media, 2);




?>