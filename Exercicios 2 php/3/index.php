<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
    /* 
 3. **Cálculo do IMC**

- Entrada: peso e altura.
- Cálculo: `imc = peso / (altura * altura)`
- Exibe o IMC com duas casas decimais.
 */


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        if(!empty($peso) && is_numeric($peso) && !empty($altura) && is_numeric($altura)){
        $imc = $peso / ($altura * $altura);

        $imc = "Pesando $peso Kg, tendo uma altura de $altura m, seu imc será de " . number_format($imc, 2);
        }else{
            echo "<script> alert ('Por favor digite todos dados corretamente'); </script>";
        }
    }

    ?>


<form action="" method="POST">
    <p>Digite o seu peso em Kg:</p>
    <input type="text" method="POST" name="peso" placeholder="Digite aqui o seu peso" oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="OFF">
    <br>
    <p>Digite sua altura em metros:</p>
    <input type="text" method="POST" name="altura" placeholder="Digite aqui a sua altura" oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="OFF">
    <br>
    <input type="submit" value="calcular" class="botao">

    <?php if (!empty($imc)) { ?>
    <p class="resultado"><?php echo $imc; ?></p>
<?php } ?>


</form>

<div class="nxp">
    <a href="../2/index.php">
        <button class="bt">Exercicio 2</button>
    </a>
    <a href="../4/index.php">
        <button class="bt">Exercicio 4</button>
    </a>
</div>

</body>
</html>