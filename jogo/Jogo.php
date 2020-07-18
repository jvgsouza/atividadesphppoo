<?php

class Jogo{
    private $nome;

    public function __construct($nome = "Super Mario"){
        setNome();
        $personagem = new Mario();
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

}


?>