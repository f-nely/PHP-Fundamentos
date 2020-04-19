<?php

    $palavras = explode(' ', rtrim(fgets(STDIN))); 
        

    //Informe seu código aqui
    foreach($palavras as $palavra){
    echo $palavra . PHP_EOL;
}
