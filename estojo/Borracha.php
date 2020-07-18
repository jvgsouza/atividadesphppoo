<?php

include_once './CoisaDeApagar.php';

class Borracha extends CoisaDeApagar{
    private $tipo;

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
}


?>