<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Test;

class HomeController extends Controller {

    public function index() {
        $this->render('home');
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