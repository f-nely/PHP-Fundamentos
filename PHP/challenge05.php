<?php

$n = intval(rtrim(fgets(STDIN)));
        

//Informe seu código aqui
for ($i=1; $i <=10 ; $i++) { 
  echo "{$n} x {$i} = ";
  echo $n * $i .PHP_EOL;
}