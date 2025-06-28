<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 14</title>
</head>
<body>
    
<?php
/* 
### 14. **Divisão do Valor de Conta entre Amigos**

- Entrada: valor total da conta, número de amigos.
- Cálculo: `valorPorPessoa = total / amigos`
*/

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $conta = $_POST["conta"];
    $amigos = $_POST["amigos"];



 

    if(!empty($conta) && is_numeric($conta) && !empty($amigos) && is_numeric($amigos)){
        $divisao = $conta / $amigos;
        $saida = "Contando com " . $amigos . " amigos, e a conta num total de R$ " . $conta . " ,cada um deverá pagar R$ " . number_format($divisao, 2);

    }else{
        echo "<script> alert('Por favor digite todos dados corretamente'); </script>";
    }

}
?>

<form action=""method="POST">
    <p>Digite o valor da conta:</p>
    <br>
    <input type="text" name="conta"  autocomplete="off">
    <p>Digite a quantidade de amigos:</p>
    <br>
    <input type="text" name="amigos" autocomplete="off">
    <br>
    <input type="submit" >
    <br>

    <?php if (!empty($saida)) { ?>
    <p class="resultado"><?php echo $saida; ?></p>
<?php } ?>


</form>

<div class="nxp">
    <a href="../13/index.php">
        <button class="bt">Exercicio 13</button>
    </a>
    <a href="../15/index.php">
        <button class="bt">Exercicio 15</button>
    </a>
</div>


</body>
</html>