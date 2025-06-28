<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 15</title>
</head>
<body>
    
<?php
/* 
### 15. **Apresentação de um Produto com Formatação de Preço**

- Entrada: nome do produto, preço.
- Saída: `Produto: Nome — Preço: R$ number_format(preco, 2, ',', '.')`
*/

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $produto = $_POST["produto"];
    $preco = $_POST["preco"];



 

    if(!empty($produto) && is_string($produto) && !empty($preco) && is_numeric($preco)){
        $saida = "o produto " . $produto . " tem um preço de R$ " . number_format($preco, 2, ',', '.');

    }else{
        echo "<script> alert('Por favor digite todos dados corretamente'); </script>";
    }

}
?>

<form action=""method="POST">
    <p>Digite o nome do produto:</p>
    <br>
    <input type="text" name="produto"  autocomplete="off">
    <p>Digite o valor do memsmo:</p>
    <br>
    <input type="text" name="preco" autocomplete="off">
    <br>
    <input type="submit" >
    <br>

    <?php if (!empty($saida)) { ?>
    <p class="resultado"><?php echo $saida; ?></p>
<?php } ?>


</form>

<div class="nxp">
    <a href="../14/index.php">
        <button class="bt">Exercicio 14</button>
    </a>

</div>


</body>
</html>