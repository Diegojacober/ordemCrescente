<?php

function find($array)
{
    return array_unique(array_diff_assoc($array, array_unique($array)));
}

function sequenciaCrescente($array){

    $repetidos = find($array);
    print_r($repetidos);
    if($repetidos > 0)
    {
        return 'impossivel';
    }
    else{
        return 'possivel';
    }
}

echo sequenciaCrescente([1,3,2,1]);