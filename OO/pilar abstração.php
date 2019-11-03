<?php

class Funcionario {
    // atributos
    public $nome = null;
    public $telefone = null;
    public $numeroFilhos = null;

    //setters
    function setNome($nome){
        $this->nome = $nome;
    }
    function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    function setNumeroFilhos($numeroFilhos){
        $this->numeroFilhos = $numeroFilhos;
    }

    // getters
    function getNome(){
        return $this->nome;
    }
    function getTelefone(){
        return $this->telefone;
    }
    function getNumeroFilhos(){
        return $this->numeroFilhos;
    }


    // metodos
    function resumirCadFunc () {
        return "$this->nome possui $this->numeroFilhos filho(s) e seu número de telefone é $this->telefone";
    }

    function modificarNumeroFilhos ($valor) {
        $this->numeroFilhos = $valor;
    }
}

$y = new Funcionario ();
$y->setNome('José da Silva');
$y->setNumeroFilhos('42');
$y->setTelefone(9996666);
echo $y->resumirCadFunc();

echo '<br>';

$z = new Funcionario ();
$z->setNome('Tomas Turbando');
$z->setNumeroFilhos('0');
$z->setTelefone(9992222);
echo $z->resumirCadFunc();
?>