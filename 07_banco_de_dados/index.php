<?php

$pdo = new PDO("mysql:dbname=test;host=localhost;", 'root', '');

$sql = $pdo->query('SELECT * FROM usuarios');

echo "Total: " . $sql->rowCount();

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

print_r($dados);