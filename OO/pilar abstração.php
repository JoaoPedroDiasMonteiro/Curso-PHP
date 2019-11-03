<?php

class Funcionario {
    // atributos
    public $nome = null;
    public $telefone = null;
    public $numeroFilhos = null;
    public $cargo = null;
    public $salario = null;

    // getters e setters (overloading)
    function __set ($atributo, $valor) {
        $this->$atributo = $valor;
    }
    function __get ($atributo) {
        return $this->$atributo;
    }

    // //setters
    // function setNome($nome){
    //     $this->nome = $nome;
    // }
    // function setTelefone($telefone){
    //     $this->telefone = $telefone;
    // }
    // function setNumeroFilhos($numeroFilhos){
    //     $this->numeroFilhos = $numeroFilhos;
    // }

    // // getters
    // function getNome(){
    //     return $this->nome;
    // }
    // function getTelefone(){
    //     return $this->telefone;
    // }
    // function getNumeroFilhos(){
    //     return $this->numeroFilhos;
    // }


    // metodos
    function resumirCadFunc () {
        return "$this->nome possui $this->numeroFilhos filho(s) e seu número de telefone é $this->telefone";
    }

    function modificarNumeroFilhos ($valor) {
        $this->numeroFilhos = $valor;
    }
}

$y = new Funcionario ();
$y->__set('nome', 'José da Silva');
$y->__set('numeroFilhos', '42');
$y->__set('telefone', '9996666');
echo $y->__get('telefone');
echo $y->resumirCadFunc();

echo '<br>';

$z = new Funcionario ();
$z->__set('nome', 'Tomas Turbando');
$z->__set('numeroFilhos', '0');
$z->__set('telefone', '9992222');
echo $z->resumirCadFunc();
?>