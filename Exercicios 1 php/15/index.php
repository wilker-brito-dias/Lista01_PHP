<?php
/*
15. **Preço Final de Um Produto com Imposto:**
    - Crie uma variável para o `preco_base` de um produto.
    - Crie uma variável para a `taxa_imposto` em porcentagem (ex: 18%).
    - Calcule o `valor_do_imposto`.
    - Calcule o `preco_final` (preco_base + valor_do_imposto).
    - Exiba o `preco_base`, a `taxa_imposto`, o `valor_do_imposto` e o `preco_final`, formatados.
*/
$preco_base = 150;
$taxa = 18;



$imposto = $taxa /100;
$valor_imposto = $preco_base * $imposto;
$preco_final = $preco_base + $valor_imposto;

echo "O seu produto atualmente custa $preco_base R$ <br>" ;
echo "Você terá um imposto de $taxa % <br>";
echo "Isso em reais será $valor_imposto R$ <br>";

echo "Tendo o preço final em $preco_final RS";


?>