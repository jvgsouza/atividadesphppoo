<?php

include_once './Personagem.php';

class Yoshi extends Personagem{

    public function comeFruta(){
        $this->pontos += 1;
        if ($this->pontos == 100) {
            $this->vida += 1;
            $this->pontos = 0;
        }
    }

}

?>