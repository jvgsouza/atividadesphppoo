<?php

include_once './CoisaDeEscrever.php';

Class Caneta extends CoisaDeEscrever{

    private $cor;

    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

}

?>