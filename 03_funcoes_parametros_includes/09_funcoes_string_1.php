<?php 

$nomeSujo = '      Leonardo    Giagio  ';
$nomeLimpo = trim($nomeSujo);

echo 'Nome sujo: ' . strlen($nomeSujo) . '<br>';
echo 'Nome limpo: ' . strlen($nomeLimpo) . '<br>';

echo strtolower($nomeLimpo) . '<br>';
echo strtoupper($nomeLimpo) . '<br>';

echo str_replace('Giagio', 'França', $nomeLimpo) . '<br>';

echo substr($nomeLimpo, 0, 8);