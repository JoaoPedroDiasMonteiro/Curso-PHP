<?php

interface EquipamentoEletronicoInterface{
    public function ligar();
    public function desligar();
}

class Geladeira implements EquipamentoEletronicoInterface {
    public function abrirPorta () {
        echo 'abrir a porta';
    } 
    public function ligar(){
        echo 'ligar';
    }
    public function desligar(){
        echo 'desligar';
    }
}


class TV implements EquipamentoEletronicoInterface{
    public function trocarCanal() {
        echo 'trocar canal';
    }
    public function ligar(){
        echo 'ligar';
    }
    public function desligar(){
        echo 'desligar';
    }
}

$geladeira = new Geladeira;
$tv = new TV;

// ---------------------------------------------------------------------------------------------------------------->

interface MamiferoInterface {
    public function respirar();
}

interface TerrestreInterface {
    public function andar();
}

interface AquaticoInterface {
    public function nadar();
}

class Humano implements MamiferoInterface, TerrestreInterface {
    public function andar() {
        echo 'andar';
    }
    public function respirar() {
        echo 'respirar';
    }
    public function falar() {
        echo 'falar';
    }
}


class Baleia implements MamiferoInterface, AquaticoInterface {
    public function nadar() {
        echo 'nadar';
    }
    public function respirar() {
        echo 'respirar';
    }


}

// ---------------------------------------------------------------------------------------------------------------->


interface AnimalInterface {
    public function comer();
}

interface AveInterface extends AnimalInterface {
    public function voar();
}

class Papagaio implements AveInterface {
    public function voar() {
        echo 'voar';
    }
    public function comer(){
        echo 'comer';
    }
}

?>