<?php

include_once './Internet.interface.php';
include_once './Equipamento.class.php';


class Tablet extends Equipamento implements Internet{
    public function conectar(){
        $equipamento = new Equipamento;
        $valor = $equipamento->descarregar(10);
        return $valor;
    }

    public function desconectar(){
        $equipamento = new Equipamento;
        $valor = $equipamento->descarregar(5);
        return $valor;
    }

}

?>