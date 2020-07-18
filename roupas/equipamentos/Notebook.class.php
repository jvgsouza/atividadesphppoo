<?php

include_once './Wifi.interface.php';
include_once './Equipamento.class.php';


class Notebook extends Equipamento implements Wifi{
    public function conectar(){
        $equipamento = new Equipamento;
        $valor = $equipamento->descarregar(15);
        return $valor;
    }

    public function desconectar(){
        $equipamento = new Equipamento;
        $valor = $equipamento->descarregar(5);
        return $valor;
    }

}

?>