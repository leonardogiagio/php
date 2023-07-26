<?php

$numeros = [10, 20, 24, 91, 18];

array_pop($numeros);

print_r($numeros);
echo '<br>';

array_shift($numeros);

print_r($numeros);
echo '<br>';

if(in_array(91, $numeros)) {
    echo 'existe <br>';
} else {
    echo 'não existe <br>';
}

$pos = array_search(91, $numeros);
echo $pos . '<br>';

sort($numeros);
print_r($numeros);
echo '<br>';

rsort($numeros);
print_r($numeros);
echo '<br>';

$nomes = ['leonardo', 'giagio', 'faria', 'de', 'frança'];

echo implode(' ', $nomes);
