<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
    /* ### 2. **Conversor de Moeda**

- Entrada: valor em reais, cotação do dólar.
- Cálculo: `valorEmDolar = reais / cotacao`
 */


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $valorreal = $_POST["valorreal"];
        $valorcotacao = $_POST["valorcotacao"];
if(!empty($valorreal) && is_numeric($valorreal) && !empty($valorcotacao) && is_numeric($valorcotacao)){
        $resultado = $valorreal / $valorcotacao;

        $dolar = "Com $valorreal R$, tendo o dolar a $valorcotacao US, você terá " . number_format($resultado, 2) . "US";
        }else{
            echo "<script>alert('Por favor digite todos dados solicitados');</script>";
        }
    }

    ?>


<form action="" method="POST">
    <p>Digite o valor em reais a serem trocados por dolar:</p>
    <input type="text" method="POST" name="valorreal" placeholder="Digite aqui o valor de reais" oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="OFF">
    <br>
    <p>Digite o valor da cotação do dolar:</p>
    <input type="text" method="POST" name="valorcotacao" placeholder="Digite aqui o valor da cotação do dolar" oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="OFF">
    <br>
    <input type="submit" value="calcular" class="botao">

    <?php if (!empty($dolar)) { ?>
    <p class="resultado"><?php echo $dolar; ?></p>
<?php } ?>


</form>

<div class="nxp">
    <a href="../1/index.php">
        <button class="bt">Exercicio 1</button>
    </a>
    <a href="../3/index.php">
        <button class="bt">Exercicio 3</button>
    </a>
</div>

</body>
</html>