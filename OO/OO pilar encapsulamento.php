<?php

class Pai {
    private $nome = 'Tomas';
    protected $sobrenome = 'Turbando';
    public $humor = 'feliz';

    public function __get($attr) {
        return $this->$attr;
    }
    public function __set($attr, $value) {
        $this->$attr = $value;
    }
    public function setNome ($nome) {
        if (strlen($nome) > 3) {
            $this->nome = $nome;
        }
    }
    private function executarMania() {
        echo 'cantar';
    }
    protected function responder () {
        echo 'oi';
    }
    public function executarAcao($acao) {
        $acao == 'responder' ? $this->responder(): '';
        $acao == 'executarMania' ? $this->executarMania(): '';

    }

}

$pai= new Pai;
echo $pai->nome;
echo $pai->sobrenome = ' Melancia';
$pai->executarAcao('responder');
$pai->executarAcao('executarMania');



?>
