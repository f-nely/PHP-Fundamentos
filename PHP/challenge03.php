<?php

$arr = [
  rtrim(fgets(STDIN)), 
  rtrim(fgets(STDIN)), 
  rtrim(fgets(STDIN)),
  rtrim(fgets(STDIN)),
  rtrim(fgets(STDIN)),
  rtrim(fgets(STDIN)),
  rtrim(fgets(STDIN)),
  rtrim(fgets(STDIN)),
  rtrim(fgets(STDIN)),
  rtrim(fgets(STDIN))
];


//Informe seu código aqui
$arrlength = count($arr);
for ($i=0; $i <$arrlength ; $i++) { 
echo "$arr[$i] ";    
}

