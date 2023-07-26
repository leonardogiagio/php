<?php

$lista = ['bonieky', 'pedro', 'paulo', 'josé', 'francisca', 'paula'];
$aprovados = ['bonieky', 'pedro', 'josé', 'francisca'];

$numeros = [10, 20, 24, 91, 18];


echo 'total: ' . count($lista) . '<br>';

$reprovados = array_diff($lista, $aprovados);
print_r($reprovados);
echo '<br>';


$filtrados = array_Filter($numeros, function($item) {
    if($item < 30) {
        return true;
    } else {
        return false;
    }
});

print_r($filtrados);
echo '<br>';

$dobrados = array_map(function($item) {
    return $item * 2;
}, $numeros);

print_r($dobrados);
echo '<br>';