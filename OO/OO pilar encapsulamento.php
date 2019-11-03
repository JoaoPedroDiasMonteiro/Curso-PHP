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

class Filho extends Pai {
    private function executarMania() {
        echo 'lalalalalalalaa';
    }
    protected function responder () {
        echo 'olá';
    }
}


$filho = new Filho;
echo '<pre>';
print_r($filho);
echo '</pre>';

// exibit métodos do objeto
echo '<pre>';
print_r(get_class_methods($filho));
echo '</pre>';

//
$filho->executarAcao('responder');
echo '<BR>';
$filho->executarAcao('executarMania');



?>
