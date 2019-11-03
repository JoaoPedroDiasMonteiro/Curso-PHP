<?php

class Funcionario {
    public $nome = null;
    public $telefone = null;
    public $numeroFilhos = null;

    function resumirCadFunc () {
        return "$this->nome possui $this->numeroFilhos filho(s) e seu número de telefone é $this->telefone";
    }

    function modificarNumeroFilhos ($valor) {
        $this->numeroFilhos = $valor;
    }
}

$y = new Funcionario ();
$y->modificarNumeroFilhos(5);
echo $y->resumirCadFunc()

?>