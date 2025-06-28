<?php
/*
### **3. Calcular média e informar se o aluno está aprovado, em recuperação ou reprovado**

- Entrada: três notas.
- Lógica:
    - Aprovado: média ≥ 7
    - Recuperação: média entre 5 e 6.9
    - Reprovado: média < 5
     */

$nota1 = $_GET["n1"];
$nota2 = $_GET["n2"];
$nota3 = $_GET["n3"];

$media = ($nota1 + $nota2 + $nota3) / 3;


if($media >=7){
    echo "O aluno obteve a nota " . number_format($media, 2) . ", sendo assim aprovado";
}elseif ($media <5){
    echo "O aluno obteve a nota" . number_format($media, 2) . ", sendo assim reprovado";
}else{
    echo "O aluno obteve a nota " . number_format($media, 2) . ", estando assim de recuperação";
}

?>