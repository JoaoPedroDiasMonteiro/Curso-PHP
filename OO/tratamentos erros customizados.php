<?php

class MinhaException extends Exception {
    private $erro = '';

    public function __construct($erro) {
        $this->erro = $erro;
    }
    public function exibirMensagemErro () {
        echo '<div style="border:1px solid black; color: red; padding:15px">';
        echo $this->erro;
        echo '</div>';
    }
}

try {
    throw new MinhaException('Erro de teste');

} catch (MinhaException $e) {
    $e->exibirMensagemErro();
} 
?>