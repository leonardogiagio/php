<?php

function somar(float $n1, float $n2, float $n3 = 0): float {
    return $n1 + $n2 + $n3;
}

$soma = somar(10, 5);

echo 'TOTAL: ' . $soma;