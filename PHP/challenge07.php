<?php

    //Informe seu código aqui
    function fatorial($n)
    {
    $fat = 1;
    for ($i=$n; $i > 0; $i--) 
    { 
        $fat = $fat * $i;
    }
    return $fat;
   }



$n = intval(rtrim(fgets(STDIN)));
print(fatorial($n));