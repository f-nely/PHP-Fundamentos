<?php

$var1 = intval( rtrim(fgets(STDIN)));
$var2 = intval( rtrim(fgets(STDIN)));

//Informe o seu código aqui
$soma = $var1 + $var2;
$sub = $var1 - $var2;
$produto = $var1 * $var2;
echo $soma .PHP_EOL;
echo $sub .PHP_EOL;
echo $produto;

/*
* Resposta do professor
$var1 = intval( rtrim(fgets(STDIN)));
    $var2 = intval( rtrim(fgets(STDIN)));
    
    echo $var1 + $var2 . PHP_EOL;
    echo $var1 - $var2 . PHP_EOL;
    echo $var1 * $var2 . PHP_EOL;
*/