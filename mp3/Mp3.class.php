<?php

class Mp3{
    private $musicaAtual = 0;
    private $listaMusicas = array();

    public function adicionaMusica($musica){
        array_push($this->$listaMusicas, $musica);
    }

    public function removeMusica($musica){
        $indice = array_search($musica, $this->listaMusicas);
        unset($this->listaMusicas[$indice]);
    }

    public function retornaAtual(){
        return $this->listaMusicas[$this->musicaAtual];
    }

    public function proximaMusica(){
        $this->musicaAtual++;
    }

    public function voltaMusica(){
        $this->musicaAtual--;
    }
}

?>