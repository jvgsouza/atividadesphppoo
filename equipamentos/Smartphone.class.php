<?php

include_once './Torpedo.interface.php';
include_once './Ligacao.interface.php';
include_once './Internet.interface.php';
include_once './Equipamento.class.php';


class Smartphone extends Equipamento implements Internet,Torpedo,Ligacao{
    public function fazerLigacao(){
        $this->descarregar(20);
    }

    public function atenderLigacao(){
        $this->descarregar(20);
    }

    public function enviarMensagem(){
        $this->descarregar(10);
    }

    public function receberMensagem(){
        $this->descarregar(10);
    }

    public function conectar(){
        $this->descarregar(30);
    }

    public function desconectar(){
        $this->descarregar(5);
    }

}

?>