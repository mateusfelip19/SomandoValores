<?php
$dados = $_POST['dados'];
$arrayDados = json_decode($dados);

$total = 0;
foreach ($arrayDados as $index => $item) {
    $total += $item;
}
echo $total;
?>