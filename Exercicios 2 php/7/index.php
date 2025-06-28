<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 7</title>
</head>
<body>
    
<?php
/* 
### 7. Cálculo de Reajuste Salarial

- Entrada: salário atual, percentual de reajuste.
- Saída: exibe o novo salário`$novoSalario = $salario + ($salario * $percentual / 100);`.
*/

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $salario = $_POST["salario"];
    $percentual = $_POST["percentual"];

 

    if(!empty($salario) && is_numeric($salario) && !empty($percentual) && is_numeric($percentual)){
        $conta = $salario + ($salario * $percentual / 100);
        $reajuste = "Seu novo salário é de R$ " . number_format($conta, 2, ',', '.');

    }else{
        echo "<script> alert('Por favor digite todos dados corretamente'); </script>";
    }

}
?>

<form action=""method="POST">
    <p>Digite seu salario atual:</p>
    <br>
    <input type="text" name="salario"  autocomplete="off">
    <p>Digite o valor do reajuste proposto:</p>
    <br>
    <input type="text" name="percentual" autocomplete="off">
    <br>
    <input type="submit" >

    <?php if (!empty($reajuste)) { ?>
    <p class="resultado"><?php echo $reajuste; ?></p>
<?php } ?>


</form>

<div class="nxp">
    <a href="../6/index.php">
        <button class="bt">Exercicio 6</button>
    </a>
    <a href="../8/index.php">
        <button class="bt">Exercicio 8</button>
    </a>
</div>


</body>
</html>