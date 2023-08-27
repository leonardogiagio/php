<?php

class Calculadora {
    private float $resultado;

    public function __construct() {
        $this->setResultado(0);
    }

    public function setResultado($r) {
        $this->resultado = $r;
    }

    public function getResultado() {
        return $this->resultado;
    }

    public function add($value) {
        $this->setResultado($this->getResultado() + $value);
    }

    public function sub($value) {
        $this->setResultado($this->getResultado() - $value);
    }

    public function multiply($value) {
        $this->setResultado($this->getResultado() * $value);
    }

    public function divide($value) {
        $this->setResultado($this->getResultado() / $value);
    }

    public function total() {
        return $this->getResultado();
    }

    public function clear() {
        $this->setResultado(0);
    }

}