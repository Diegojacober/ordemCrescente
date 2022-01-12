<?php

function primos($inicial, $final)
{

    $numeros = [];
    for ($inicial; $inicial < $final; $inicial++) {
        array_push($numeros, $inicial);
    }
    $naoPrimo = [];

    foreach ($numeros as $n) {

        for ($count = 2; $count < $n; $count++) {
            if ($n % $count == 0) {
                if (in_array($n,$naoPrimo) == false) {
                    array_push($naoPrimo, $n);
                }
               
            }
        }
    }
  $primos = array_diff($numeros, $naoPrimo);

    foreach($primos as $n){
        echo 'Primo: '.$n . '<br>';
    }

}

primos(10, 29);
