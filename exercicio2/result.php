<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];

$email = $nome . "." . $sobrenome . "@cps.sp.gov.br";

echo "Seu email institucional é:" . $email;
?>