<?php

function find($array)
{
    return array_unique(array_diff_assoc($array, array_unique($array)));
}

function sorteio()
{
    $array = [];
    for ($i = 1; $i <= 10; $i++) {
        array_push($array, round(rand(1, 10)));
    }

    echo '<pre>';
    print_r($array);
    echo '</pre>';

    $copiados = find($array);

    echo 'Os numeros que se repetem são: ';
    foreach ($copiados as $copia) {
        echo $copia . ' , ';
    }
}

sorteio();
