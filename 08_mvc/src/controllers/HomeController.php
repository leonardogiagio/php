<?php

namespace src\controllers;

use \core\Controller;
use \src\models\Test;

class HomeController extends Controller {

    public function index() {
        $posts = [
            ['titulo' => 'Titulo de Teste 1', 'corpo' => 'Corpo de teste 1'],
            ['titulo' => 'Titulo de Teste 2', 'corpo' => 'Corpo de teste 2'],
            ['titulo' => 'Titulo de Teste 3', 'corpo' => 'Corpo de teste 3'],
            ['titulo' => 'Titulo de Teste 4', 'corpo' => 'Corpo de teste 4'],
            ['titulo' => 'Titulo de Teste 5', 'corpo' => 'Corpo de teste 5'],
        ];

        $this->render('home', [
            'nome' => 'Leonardo',
            'idade' => 24,
            'posts' => $posts
        ]);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

    public function fotos() {
        $this->render('fotos');
    }

    public function foto($param) {
        echo 'Acessando a foto ' . $param['id'];
    }
}
