<?php

$array = [
    'nome' => 'Leonardo',
    'idade' => 23,
    'empresa' => 'B7web',
    'cor' => 'Azul',
    'profissao' => 'Programador'
];


$chaves = array_keys($array);
print_r($chaves);

echo '<br>';

$valores = array_values($array);
print_r($valores);