<?php

// $nome = 'Leonardo';

$nomeCompleto = $nome ?? 'Visitante';
// $nomeCompleto .= isset($sobrenome) ? $sobrenome : '';

$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;