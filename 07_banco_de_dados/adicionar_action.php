<?php

require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {

    $sql = $pdo->prepare('SELECT email FROM users WHERE email = :email');
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() === 0) {

        // pdo statement
        $sql = $pdo->prepare('INSERT INTO users (nome, email) VALUES (:name, :email)');

        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->execute();
        header('Location: index.php');
        exit;
    } else {
        header('Location: adicionar.php');
        exit;
    }
} else {
    header('Location: adicionar.php');
    exit;
}
