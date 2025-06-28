

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
/*
### 1. **Cálculo de Salário Bruto Mensal**

- Entrada: valor da hora, horas semanais.
- Cálculo: `salario = valorHora * horasSemana * 4.5`
*/
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor_hora = $_POST["valorhora"];
    $quantidade_hora = $_POST["quantidadehora"];
if(!empty($valor_hora) && is_numeric($valor_hora) && !empty($quantidade_hora) && is_numeric($quantidade_hora) ){
    $salario = $valor_hora * $quantidade_hora * 4.5;

       $resultado = "O salário bruto mensal é R$ " . number_format($salario, 2, ',', '.');
}else{
    echo "<script>alert('Preencha todos os campos corretamente.');</script>";
}
    
}

?>


<form  method="POST" action="" id="form">
    <p class="paragrafo">Digite o valor da hora: </p>
    <input type="text" placeholder="Digite o valor da hora" name="valorhora" oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="off"><br>
    <p class="paragrafo">Digite a quantidade de horas trabalhadas:</p>
    <input type="text" placeholder="Digite a quantidade de horas trabalhadas" name="quantidadehora" oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="off"><br>
    <input type="submit" value="calcular" class="botao">
    <br>
    
    <?php if (!empty($resultado)) { ?>
    <p class="resultado"><?php echo $resultado; ?></p>
<?php } ?>



</form>
<div class="botao-esquerda">
    <a href="../2/index.php">
        <button type="button" class="b1">Ir para Página da Pasta 2</button>
    </a>
</div>

</body>
</html>

