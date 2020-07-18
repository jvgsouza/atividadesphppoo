<?php

class Personagem{
    protected $vida;
    protected $pontos;

    public function __construct(){
        $this->vida = 3;
        $this->pontos = 0;
    }

    public function perdeVida(){
        $this->vida = $this->vida - 1;
    }

    public function mostraVida(){
        echo $this->vida;    
    }

    public function comeCogumelo(){
        $cogumelo = 1;
        $this->vida += 1;
    }

}


?>