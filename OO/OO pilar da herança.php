<?php

class Veiculo {
    public $placa = null;
    public $cor = null;

    function __construct($placa, $cor) {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function acelerar() {
        echo 'acelerou';
    }

    function freiar () {
        echo 'freiou';
    }
}

class Carro extends Veiculo {
    public $teto_solar = true;

    function abrirTetoSolar () {
        echo 'abriu teto solar';
    }

    function virar () {
        echo 'virou';
    }
}

class Moto extends Veiculo {
    public $retrovisor = true;
   
    function empinar () {
        echo 'empinou';
    }
}

$carro = new Carro('AAA1111', 'Amarelo Abelha');
$moto = new Moto('ZZZZ' , 'Azul Tubarão');
echo '<pre>';
print_r($carro);
echo '<br>';
print_r($moto);
echo '</pre>';

$moto->empinar()

?>
