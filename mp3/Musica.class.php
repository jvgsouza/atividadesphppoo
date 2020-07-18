<?php

class Musica{
    private $nome;
    private $artista;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getArtista(){
        return $this->artista;
    }

    public function setArtista($artista){
        $this->artista = $artista;
    }

}

?>