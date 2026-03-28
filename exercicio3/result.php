<?php

$reais = $_POST['reais'];

$dolar = $reais / 5.26;
$euro = $reais / 6.04;
$libra = $reais / 6.96;

echo "<h1> Dólar: " . $dolar . "</h1>";
echo "<h1> Euro: " . $euro . "</h1>";
echo "<h1> Libra: " . $libra . "</h1>;"

?>