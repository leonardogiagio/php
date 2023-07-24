<?php

$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];

/*foreach($ingredientes as $ingrediente) {
    echo 'Item: ' . $ingrediente . '<br>';
}*/

echo '<h2>Ingredientes</h2>';

echo '<ul>';
foreach($ingredientes as $chave => $valor) {
    echo '<li>' . $valor . '</li>';
}
echo '</ul>';