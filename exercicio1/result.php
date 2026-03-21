<?php

    $PESO = $_POST['PESO'];
    $ALTURA =  $_POST['ALTURA'];

    $IMC = $PESO / ($ALTURA * $ALTURA);

    if($IMC < 18.5)
    {
        echo "Você está abaixo do peso normal";
    }
    else

    if($IMC > 18.5 && $IMC < 24.9) 
    {
        echo "Você está com o peso normal";
    }
    else

        if($IMC > 25 && $IMC < 29.9)
            {
                echo "Você está com excesso de peso";
            }
            else

                if($IMC > 30)
                    {
                        echo "Você está em nível de obesidade";
                    }
                    else

                        if($IMC >= 35)
                            {
                                echo "Você está em nível de obesidade extrema";
                            }
                            else
?>