<?php

    $PESO = $_POST['PESO'];
    $ALTURA = "<br>" . $_POST['ALTURA'];

    $IMC = $_PESO / ($ALTURA * $ALTURA);

    if($PESO < 18.5)
    {
        echo "Você está abaixo do peso normal";
    }
    else

    if($PESO > 18.5 && $PESO < 24.9) 
    {
        echo "Você está com o peso normal";
    }
    else

        if($PESO > 25 && $PESO < 29,9)
            {
                echo "Você está com excesso de peso"
            }
            else

                if($PESO > 30)
                    {
                        echo "Você está em nível de obesidade"
                    }
                    else

                        if($PESO 35 >)
                            {
                                echo "Você está em nível de obesidade extrema"
                            }
                            else
?>