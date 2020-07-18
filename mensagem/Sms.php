<?php

class Sms{

    private $mensagem;
    private $datahora;
    private $remetente;
    private $destinatario;

    public function getMensagem(){
        return $this->mensagem;
    }

    public function setMensagem($mensagem){
        $this->mensagem = $mensagem;
    }

    public function getDatahora(){
        return $this->datahora;
    }

    public function setDatahora($datahora){
        $this->datahora = $datahora;
    }

    public function getRemetente(){
        return $this->remetente;
    }

    public function setRemetente(Telefone $remetente){
        $this->remetente = $remetente;
    }

    public function getDestinatario(){
        return $this->destinatario;
    }

    public function setDestinatario(Telefone $destinatario){
        $this->destinatario = $destinatario;
    }

}

?>