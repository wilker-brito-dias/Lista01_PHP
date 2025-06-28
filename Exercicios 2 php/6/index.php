<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 6</title>
</head>
<body>
    
<?php
/* 
### 6. **Concatenação e Formatação de Endereço Completo**

- Entrada: Cidade, Bairro, Rua, Numero e Quadra
- Saída: exibe a junção`(bairro . ' ' . cidade ...))`
*/

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $quadra = $_POST["quadra"];

    if(!empty($cidade) && is_string($cidade) && !empty($bairro) && is_string($bairro) && !empty($rua) && is_string($rua) && !empty($numero) && is_numeric($numero) && !empty($quadra) && is_numeric($quadra)){
        $texto = "Você mora em " . ucwords($cidade) .", no bairro " . ucwords($bairro) . ", na rua " . $rua . ", no numero " . $numero  . ", na quadra " . $quadra;

    }else{
        echo "<script> alert('Por favor digite todos dados corretamente'); </script>";
    }

}
?>

<form action=""method="POST">
    <p>Digite sua cidade:</p>
    <br>
    <input type="text" name="cidade" autocomplete="off">
    <p>Digite seu bairro:</p>
    <br>
    <input type="text" name="bairro" autocomplete="off">
    <p>Digite sua rua:</p>
    <br>
    <input type="text" name="rua" autocomplete="off">
    <p>Digite o numero da sua casa:</p>
    <br>
    <input type="text" name="numero" autocomplete="off">
    <p>Digite sua quadra:</p>
    <br>
    <input type="text" name="quadra" autocomplete="off">
    <br>
    <input type="submit" >

    <?php if (!empty($texto)) { ?>
    <p class="resultado"><?php echo $texto; ?></p>
<?php } ?>


</form>
<div class="nxp">
    <a href="../5/index.php">
        <button class="bt">Exercicio 5</button>
    </a>
    <a href="../7/index.php">
        <button class="bt">Exercicio 7</button>
    </a>
</div>


</body>
</html>