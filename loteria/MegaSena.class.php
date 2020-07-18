<?php

include_once './Loteria.class.php';

class MegaSena extends Loteria{

    function __construct(){
        $this->maximo = 60;
    }   

    public function sorteiaNumero(){
        return rand(1,$this->maximo);
    }

    public function jogar(){
        $jogo = array();
        for($i = 0; $i <= 5; $i++){
            echo $this->sorteiaNumero()." ";
        }
    }

}

?>