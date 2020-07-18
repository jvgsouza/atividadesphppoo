<?php

include_once './CoisaDeEscrever.php';

Class Lapis extends CoisaDeEscrever{

    private $tipo;

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

}

?>