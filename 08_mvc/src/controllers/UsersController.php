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

    public function update($args) {
        $usuario = User::select()->find($args['id']);

        $this->render('update', [
            'usuario' => $usuario
        ]);
    }

    public function updateAction($args) {
        $nome = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if ($nome && $email) {
            User::update()
                ->set('nome', $nome)
                ->set('email', $email)
                ->where('id', $args['id'])
            ->execute();

            $this->redirect('/');
        }

        $this->redirect('/user/'.$args['id'].'/update');
    }

    public function delete($args) {

    }
}
