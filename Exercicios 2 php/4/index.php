<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
    /* 
### 4. **Cálculo de Tempo de Vida em Dias**

- Entrada: idade em anos.
- Cálculo: `dias = idade * 365`
 */

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $anos = $_POST["anos"];

 if(!empty($anos) && is_numeric($anos)){
        $dias = $anos * 365;

       
        $idade = "Tendo $anos anos, voce tem aproximadamente $dias dias de vida.";
        } else {

        echo "<script>alert('Preencha todos os campos corretamente.');</script>";
    }
    }

    ?>


<form action="" method="POST">
    <p>Digite quantos anos você tem:</p>
    <input type="text" method="POST" name="anos" placeholder="Digite aqui sua idade" oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="OFF">
    <br>
    <input type="submit" value="calcular" class="botao">

    <?php if (!empty($idade)) { ?>
    <p class="resultado"><?php echo $idade; ?></p>
<?php } ?>


</form>

<div class="nxp">
    <a href="../3/index.php">
        <button class="bt">Exercicio 3</button>
    </a>
    <a href="../5/index.php">
        <button class="bt">Exercicio 5</button>
    </a>
</div>

</body>
</html>