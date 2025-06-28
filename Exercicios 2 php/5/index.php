<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
    /* 
### 5. **Cálculo de Preço Final com Acréscimo de Taxa**

- Entrada: valor base, taxa em %.
- Cálculo: `final = base + (base * taxa / 100)`
 */

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $base = $_POST["base"];
        $taxa = $_POST["taxa"];

        if(!empty($base) && is_numeric($base) && !empty($taxa) && is_numeric($taxa)){
        $final = $base + ($base * $taxa / 100 );

       
        $idade = "Tendo um valor base de $base R$ com uma taxa de $taxa %, logo o valor final será de " . number_format($final, 2) . "R$";
        } else {

        echo "<script>alert('Preencha todos os campos corretamente.');</script>";
    }
}

    ?>


<form action="" method="POST">
    <p>Digite qual valor base:</p>
    <input type="text" method="POST" name="base" placeholder="Digite aqui o valor base" oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="OFF">
    <br>
        <p>Digite qual valor da taxa:</p>
    <input type="text" method="POST" name="taxa" placeholder="Digite aqui o valor da taxa" oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="OFF">
    <br>
    <input type="submit" value="juntar todos dados" class="botao">

    <?php if (!empty($idade)) { ?>
    <p class="resultado"><?php echo $idade; ?></p>
<?php } ?>


</form>

<div class="nxp">
    <a href="../4/index.php">
        <button class="bt">Exercicio 4</button>
    </a>
    <a href="../6/index.php">
        <button class="bt">Exercicio 6</button>
    </a>
</div>

</body>
</html>