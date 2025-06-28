<?php
    /*### **11. Calculadora simples com operações básicas**

- Entrada: dois números e operação (`+`, , , `/`).
- Lógica: `switch` para selecionar operação.
 */

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$operacao = $_GET["operacao"];

switch ($operacao) {
    case "+":
        echo "Resultado: " . ($n1 + $n2);
        break;
    case "-":
        echo "Resultado: " . ($n1 - $n2);
        break;
    case "*":
        echo "Resultado: " . ($n1 * $n2);
        break;
    case "/":
        echo "Resultado: " . ($n1 / $n2);
        break;
    default:
        echo "Operação inválida.";
}


?>