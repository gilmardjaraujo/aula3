3- Termine o script abaixo. A variável $preco contém o valor da venda. Acrescente 12% ao
preço do produto, divida em 10 parcelas e mostre na tela o valor de cada parcela e o valor total
da compra. $preco = 320; 
<br>
<br>
<?php
// valor da venda
$preco = 320.00;
// valor da venda com acrescimo 12%
$preco_com_acrescimo = $preco * 1.120;
    echo "Preco com acrescimo 12%:  " . $preco_com_acrescimo;
// Calculando o valor total em 10 parcelas
$total_parcelas = ($preco_com_acrescimo) / 10;
// Exibindo o resultado na tela
    echo "<br> Valor da parcela 1ª: " . $total_parcelas;
    echo "<br> Valor da parcela 2ª: " . $total_parcelas;
    echo "<br> Valor da parcela 3ª: " . $total_parcelas;
    echo "<br> Valor da parcela 4ª: " . $total_parcelas;
    echo "<br> Valor da parcela 5ª: " . $total_parcelas;
    echo "<br> Valor da parcela 6ª: " . $total_parcelas;
    echo "<br> Valor da parcela 7ª: " . $total_parcelas;
    echo "<br> Valor da parcela 8ª: " . $total_parcelas;
    echo "<br> Valor da parcela 9ª: " . $total_parcelas;
    echo "<br> Valor da parcela 10ª: " . $total_parcelas;
    echo "<br> Valor Total da compra: " . $preco_com_acrescimo;
?>
<br>
<hr>