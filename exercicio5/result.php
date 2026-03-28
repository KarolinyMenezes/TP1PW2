<?php
$salario = $_POST['salario'];
$bruto = $salario * 0.92;
$brutomaior = $salario * 0.9;

if($salario <= 3.242)
    {
        echo $bruto;
    }
    else
        {
            echo $brutomaior;
        }



?>