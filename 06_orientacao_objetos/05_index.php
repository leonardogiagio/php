<?php

require '05_namespaceClasse1.php';
require '05_namespaceClasse2.php';

$a = new classe1\MinhaClasse();
echo $a->testar() . PHP_EOL;

$a = new classe2\MinhaClasse();
echo $a->testar();