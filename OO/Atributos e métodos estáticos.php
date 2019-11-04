<?php

class Exemplo {
    public static $exemplo1 = 'Eu sou um atributo estático';
    public $exemplo2 = 'Eu sou um atributo normal';

    public static function metodo1 () {
        echo 'eu sou um método estático';
    }
    public function metodo2 () {
        echo 'eu sou um método normal';
    }
}

Exemplo::metodo1();
echo '<br>';
echo Exemplo::$exemplo1;



?>