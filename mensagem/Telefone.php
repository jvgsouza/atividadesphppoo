<?php

class Telefone{

    private $numero;
    private $proprietario;
    private $operadora;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getProprietario(){
        return $this->proprietario;
    }

    public function setProprietario(Proprietario $proprietario){
        $this->proprietario = $proprietario;
    }

    public function getOperadora(){
        return $this->operadora;
    }

    public function setOperadora(Operadora $operadora){
        $this->operadora = $operadora;
    }
    

}

?>