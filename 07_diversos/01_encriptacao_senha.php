<?php

$senha = '1234';

$hash = '$2y$10$2NeQpA0upXIw4c67g9hLWerKyGOhi0.A06R.2KcbqVjodIKGTpijS';

// $hash = password_hash($senha, PASSWORD_DEFAULT);

if(password_verify($senha, $hash)) {
    echo 'Senha correta';
} else {
    echo 'senha errada';
}