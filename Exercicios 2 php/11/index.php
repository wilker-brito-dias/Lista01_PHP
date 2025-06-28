<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 11</title>
</head>
<body>
    
<?php
/* 
### 11. **Geração de E-mail Institucional**

- Entrada: nome, sobrenome.
- Saída: `email = strtolower(nome) . '.' . strtolower(sobrenome) . '@senai.com.br'`
*/

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];


 

    if(!empty($nome) && is_string($nome) && !empty($sobrenome) && is_string($sobrenome)){
        $email = strtolower($nome) . '.' . strtolower($sobrenome) . "@senai.com.br";
        $result = "O seu email será $email";

    }else{
        echo "<script> alert('Por favor digite todos dados corretamente'); </script>";
    }

}
?>

<form action=""method="POST">
    <p>Digite o seu nome:</p>
    <br>
    <input type="text" name="nome"  autocomplete="off">
    <p>Digite seu sobrenome:</p>
    <br>
    <input type="text" name="sobrenome" autocomplete="off">
    <br>
    <input type="submit" >
    <br>

    <?php if (!empty($result)) { ?>
    <p class="resultado"><?php echo $result; ?></p>
<?php } ?>


</form>

<div class="nxp">
    <a href="../10/index.php">
        <button class="bt">Exercicio 10</button>
    </a>
    <a href="../12/index.php">
        <button class="bt">Exercicio 12</button>
    </a>
</div>


</body>
</html>