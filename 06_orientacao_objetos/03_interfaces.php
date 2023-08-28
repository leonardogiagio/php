<?php

interface Database {
    public function listarProdutos();
    public function adicionarProduto();
    public function alterarProduto();
}

class MysqlDB implements Database {

    public function listarProdutos() {
    }

    public function adicionarProduto() {
    }

    public function alterarProduto() {
    }
}


class OracleDB implements Database {
    public function listarProdutos() {
    }

    public function adicionarProduto() {
    }

    public function alterarProduto() {
    }
}
