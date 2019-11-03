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
    function trocarMarcha () {
        echo 'Desengatar embreagem com o pé e engatar a marcha com a mão';
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
    function trocarMarcha () {
        echo 'Desengatar embreagem com a mão e engatar a marcha com o pé';
    }
}


$carro = new Carro('AAA1111', 'Amarelo Abelha');
$moto = new Moto('ZZZZ' , 'Azul Tubarão');
$carro-> trocarMarcha();
echo '<br>';
$moto->trocarMarcha();

?>
