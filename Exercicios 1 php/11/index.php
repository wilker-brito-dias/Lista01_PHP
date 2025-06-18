<?php

/*
11. **Total de Produtos no Carrinho:**
    - Crie variáveis para `preco_produto1`, `quantidade_produto1`, `preco_produto2`, `quantidade_produto2`.
    - Calcule o subtotal de cada produto (preço * quantidade).
    - Calcule o `valor_total_carrinho` somando os subtotais.
    - Exiba o valor total do carrinho.
*/

$preco_produto1 = 20;
$quantidade_produto1 = 3;
$preco_produto2 = 7;
$quantidade_produto2 = 4;



$final1 = $preco_produto1 * $quantidade_produto1;
$final2 = $preco_produto2 * $quantidade_produto2;
$total = $final1 + $final2;


echo "O valor do produto 1 é $preco_produto1 R$<br>";
echo "Você pegou $quantidade_produto1 unidade(s) deste produto " ;
echo "o valor destes produtos é de $final1 R$ <br>";
echo "O valor do produto 2 é $preco_produto2 R$<br>";
echo "Você pegou $quantidade_produto2 unidade(s) deste produto " ;
echo "o valor destes produtos é de $final2 R$ <br>";
echo "O valor final da sua compra é de $total R$";




?>