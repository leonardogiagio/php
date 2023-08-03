<?php

function teste($name) {
    return 'Olá, meu nome é ' . $name;
}

function teste2($callback) {

    if (is_callable($callback)) {
        return $callback('Leonardo');
    }
}


echo teste2('teste') . PHP_EOL;

echo call_user_func('teste', 'Leonardo');