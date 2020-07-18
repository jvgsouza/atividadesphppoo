<?php

include_once './Personagem.php';

class Mario extends Personagem{

    public function coletaMoeda(){
        $this->pontos += 1;
        if ($this->pontos == 100) {
            $this->vida += 1;
            $this->pontos = 0;
        }
    }

}

?>