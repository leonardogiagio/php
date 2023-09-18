<?php

namespace src\controllers;

use \core\Controller;
use \src\models\User;

class UsersController extends Controller {

    public function add() {
        $this->render('add');
    }

    public function addAction() {
        $nome = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if ($nome && $email) {
            $data = User::select()->where('email', $email)->execute();

            if (count($data) === 0) {
                User::insert([
                    'nome' => $nome,
                    'email' => $email
                ])->execute();

                $this->redirect('/');
            }
        }

        $this->redirect('/novo');
    }
}
