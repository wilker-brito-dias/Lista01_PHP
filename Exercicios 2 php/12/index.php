<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 12</title>
</head>
<body>
    
<?php
/* 
### 12. Formatar Data Completa

- **Entrada**: dia, mês e ano (ex: 13, 06, 2025).
- Saída: Exibir`$data = $dia . '/' . $mes . '/' . $ano;`
*/

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $ano = $_POST["ano"];


 

    if(!empty($dia) && is_numeric($dia) && !empty($mes) && is_numeric($mes)  && !empty($ano) && is_numeric($ano)){
        $data = $dia . '/' . $mes . '/' . $ano;

    }else{
        echo "<script> alert('Por favor digite todos dados corretamente'); </script>";
    }

}
?>

<form action=""method="POST">
    <p>Digite o dia do mês:</p>
    <br>
    <input type="text" name="dia"  autocomplete="off">
    <p>Digite o numero referente ao mês:</p>
    <br>
    <input type="text" name="mes" autocomplete="off">
    <br>
    <p>Digite o ano:</p>
    <br>
    <input type="text" name="ano" autocomplete="off">
    <br>
    <input type="submit" >
    <br>

    <?php if (!empty($data)) { ?>
    <p class="resultado"><?php echo $data; ?></p>
<?php } ?>


</form>

<div class="nxp">
    <a href="../11/index.php">
        <button class="bt">Exercicio 11</button>
    </a>
    <a href="../13/index.php">
        <button class="bt">Exercicio 13</button>
    </a>
</div>


</body>
</html>