<?php

include_once './Torpedo.interface.php';
include_once './Ligacao.interface.php';
include_once './Equipamento.class.php';


class TelefoneCelular extends Equipamento implements Ligacao, Torpedo{
    public function fazerLigacao(){
        $this->descarregar(15);
    }

    public function atenderLigacao(){
        $this->descarregar(10);
    }

    public function enviarMensagem(){
        $this->descarregar(10);

    }

    public function receberMensagem(){
        $this->descarregar(10);
    }

}

?>