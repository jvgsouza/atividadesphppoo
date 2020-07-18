<?php

abstract class Equipamento{

    private $bateria = 0;

    final public function carregar(){
        $this->bateria = 100;
    }

    final public function descarregar($valor){
        $this->bateria -= $valor;
    }

    final public function getBateria(){
        return $this->bateria;
    }

}


?>