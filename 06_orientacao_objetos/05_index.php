<?php

require '05_namespaceClasse1.php';
require '05_namespaceClasse2.php';

use classe1\MinhaClasse;

$a = new MinhaClasse();
echo $a->testar() . PHP_EOL;

$a = new classe2\MinhaClasse();
echo $a->testar();