<?php

// primeiro exemplo
$numeros = [1, 2, 3, 4, 5];

function somar($subtotal, $item) {
    $subtotal += $item;
    return $subtotal;
}

$total = array_reduce($numeros, 'somar');

echo $total . PHP_EOL;



// segundo exemplo

$pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
    ['nome' => 'Beltrano', 'sexo' => 'F', 'nota' => 10],
    ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],
    ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 9],
    ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9]
];

function contar_m($subtotal, $item) {
    if($item['sexo'] === 'M') {
        $subtotal++;
    }

    return $subtotal;
}

$total_m = array_reduce($pessoas, 'contar_m');

echo $total_m;