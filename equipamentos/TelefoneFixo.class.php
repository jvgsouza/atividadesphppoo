<?php

include_once './Ligacao.interface.php';
include_once './Equipamento.class.php';


class TelefoneFixo extends Equipamento implements Ligacao{
    public function fazerLigacao(){
        $this->descarregar(10);
    }

    public function atenderLigacao(){
        $this->descarregar(5);
    }

}

?>