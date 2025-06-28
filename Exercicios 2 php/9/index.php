<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 9</title>
</head>
<body>
    
<?php
/* 
### 9. **Cálculo do Perímetro de um Retângulo**

- Entrada: largura, altura.
- Cálculo: `perimetro = 2 * (largura + altura)`
*/

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $largura = $_POST["largura"];
    $altura = $_POST["altura"];

 

    if(!empty($largura) && is_numeric($largura) && !empty($altura) && is_numeric($altura)){
        $conta = 2 * ($largura + $altura);
        $perimetro = "O perimetro do retangulo é de " . number_format($conta, 2);

    }else{
        echo "<script> alert('Por favor digite todos dados corretamente'); </script>";
    }

}
?>

<form action=""method="POST">
    <p>Digite a largura do retangulo:</p>
    <br>
    <input type="text" name="largura"  autocomplete="off">
    <p>Digite a altura do retangulo:</p>
    <br>
    <input type="text" name="altura" autocomplete="off">
    <br>
    <input type="submit" >

    <?php if (!empty($perimetro)) { ?>
    <p class="resultado"><?php echo $perimetro; ?></p>
<?php } ?>


</form>

<div class="nxp">
    <a href="../8/index.php">
        <button class="bt">Exercicio 8</button>
    </a>
    <a href="../10/index.php">
        <button class="bt">Exercicio 10</button>
    </a>
</div>


</body>
</html>