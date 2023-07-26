<?php

function somar($n1, $n2, &$total) {
    $total = $n1 + $n2;
}

$total = 0;

somar(10, 5, $total);

echo $total;