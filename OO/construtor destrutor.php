<?php

class Pessoa {
    public $nome = null;

    function __construct($nome) {
        $this->nome = $nome;
    }

    function __destruct() {
      echo 'Objeto removido';  
    }

    function correr() {
        return "$this->nome está correndo";
    }
}

$pessoa = new Pessoa('Luiz');
echo $pessoa->correr();
