<?php

include_once './Loteria.class.php';

class Quina extends Loteria{

    function __construct(){
        $this->maximo = 80;
    }   

    public function sorteiaNumero(){
        return rand(1,$this->maximo);
    }

    public function jogar(){
        $jogo = array();
        for($i = 0; $i <= 14; $i++){
            echo $this->sorteiaNumero()." ";
        }
    }

}

?>