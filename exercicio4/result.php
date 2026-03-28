<?php
$nota1=$_POST['prinota'];
$nota2=$_POST['segnota'];
$nota3=$_POST['ternota'];

$resultado= ($nota1 + $nota2 + $nota3) / 3;

if($resultado <= 4)
    {
        echo "Nota I";
    }
    elseif ($resultado >= 4.1 && $resultado <= 6)
    {
        echo "Nota R";
    }
    elseif ($resultado >= 6.1 && $resultado <= 8)
    {
        echo "Nota B";
    }
    else{
        echo "Nota MB";
    }
?>