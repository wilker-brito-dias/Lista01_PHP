<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 10</title>
</head>
<body>
    
<?php
/* 
### 10. **Cálculo de Volume de uma Caixa Retangular**

- Entrada: comprimento, largura, altura.
- Cálculo: `volume = c * l * a`
*/

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $largura = $_POST["largura"];
    $altura = $_POST["altura"];
    $comprimento = $_POST["comprimento"];

 

    if(!empty($largura) && is_numeric($largura) && !empty($altura) && is_numeric($altura) && !empty($comprimento) && is_numeric($comprimento)){
        $conta = $largura * $altura * $comprimento;
        $volume = "O volume da caixa retangular é de " . number_format($conta, 2);

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
    <p>Digite o comprimento do retangulo:</p>
    <br>
    <input type="text" name="comprimento" autocomplete="off">
    <br>
    <input type="submit" >
    <br>

    <?php if (!empty($volume)) { ?>
    <p class="resultado"><?php echo $volume; ?></p>
<?php } ?>


</form>

<div class="nxp">
    <a href="../9/index.php">
        <button class="bt">Exercicio 9</button>
    </a>
    <a href="../11/index.php">
        <button class="bt">Exercicio 11</button>
    </a>
</div>


</body>
</html>