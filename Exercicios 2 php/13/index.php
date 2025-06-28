<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 13</title>
</head>
<body>
    
<?php
/* 
### 13. **Reorganização de Nome (Sobrenome, Nome)**

- Entrada: nome e sobrenome.
- Saída: `Sobrenome, Nome`
*/

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];



 

    if(!empty($nome) && is_string($nome) && !empty($sobrenome) && is_string($sobrenome)){
        $saida = $sobrenome . ',' . $nome;

    }else{
        echo "<script> alert('Por favor digite todos dados corretamente'); </script>";
    }

}
?>

<form action=""method="POST">
    <p>Digite o seu nome:</p>
    <br>
    <input type="text" name="nome"  autocomplete="off">
    <p>Digite o seu sobrenome:</p>
    <br>
    <input type="text" name="sobrenome" autocomplete="off">
    <br>
    <input type="submit" >
    <br>

    <?php if (!empty($saida)) { ?>
    <p class="resultado"><?php echo $saida; ?></p>
<?php } ?>


</form>

<div class="nxp">
    <a href="../12/index.php">
        <button class="bt">Exercicio 12</button>
    </a>
    <a href="../14/index.php">
        <button class="bt">Exercicio 14</button>
    </a>
</div>


</body>
</html>