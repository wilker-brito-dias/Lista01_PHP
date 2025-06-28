<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 8</title>
</head>
<body>
    
<?php
/* 
### 8. **Data de Nascimento e Ano Atual**

- Entrada: ano de nascimento.
- Cálculo: `idade = date('Y') - anoNascimento`
*/

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $ano = $_POST["ano"];


 

    if(!empty($ano) && is_numeric($ano)){
        $conta = date('Y') - $ano;
        $idade = "Tendo nascido em " . $ano . " você tem " . $conta . "  anos";

    }else{
        echo "<script> alert('Por favor digite todos dados corretamente'); </script>";
    }

}
?>

<form action=""method="POST">
    <p>Digite o ano em que voce nasceu:</p>
    <br>
    <input type="text" name="ano"  autocomplete="off">
    <br>
    <input type="submit" >

    <?php if (!empty($idade)) { ?>
    <p class="resultado"><?php echo $idade; ?></p>
<?php } ?>


</form>
<div class="nxp">
    <a href="../7/index.php">
        <button class="bt">Exercicio 7</button>
    </a>
    <a href="../9/index.php">
        <button class="bt">Exercicio 9</button>
    </a>
</div>


</body>
</html>