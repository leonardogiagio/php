<?php 

$nomeCompleto = 'leonardo giagio';

if(strpos($nomeCompleto, 'leo') > -1) {
    echo 'achou <br>';
}  else {
    echo 'não achou <br>';
}

echo ucfirst($nomeCompleto) . '<br>';
echo ucwords($nomeCompleto) . '<br>';

$nomes = explode(' ', $nomeCompleto);
print_r($nomes);

$numero = 12913.12;

echo number_format($numero, 2, ',', '.');