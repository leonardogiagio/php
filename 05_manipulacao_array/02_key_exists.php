<?php

$array = [
    'nome' => 'Leonardo',
    'idade' => 23,
    'empresa' => 'B7web',
    'cor' => 'Azul',
    'profissao' => 'Programador'
];


if(key_exists('idade', $array)) {
    $idade = $array['idade'];

    echo "{$idade} anos";
} else {
    echo 'Não tem idade.';
}