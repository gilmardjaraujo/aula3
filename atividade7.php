7- Termine o script abaixo, exibindo o nome do mês correspondente à variável $numMes e caso o
valor de $numMes esteja fora do intervalo entre 1 e 12, exibir a mensagem “Mês inválido” <br>
$numMes = 8; <br>
<?php
$numMes = 8;
if ($numMes >= 1 && $numMes <= 12) {
    $meses = array(
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    );
    echo "Mês correspondente ao número $numMes é: " . $meses[$numMes];
} else {
    echo "Mês inválido";
}
?>
<br>
<hr>