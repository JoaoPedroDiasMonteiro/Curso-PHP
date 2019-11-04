<?php

namespace A;
class Client  implements CadastroInterface, \B\CadastroInterface{
    public $name = 'Zé';

    public function __construct() {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }
    public function __get($attr) {
        return $this->$attr;
    }
    public function salvar() {
        echo 'salvar';
    }
    public function remover() {
        echo 'remover';
    }
}

interface CadastroInterface {
    public function salvar();
}

namespace B;
class Client implements CadastroInterface {
    public $name = 'Maria';

    public function __construct() {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }
    public function __get($attr) {
        return $this->$attr;
    }
    public function remover(){
        echo 'remover';
    }
}

interface CadastroInterface {
    public function remover();
}



$c = new \A\Client;
print_r($c);
$c->name;



?>