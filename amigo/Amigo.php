<?php

class Pessoa{

    private $nome;
    private $idade;
    private $amigos = array();
    private $briga = array();

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function adicionaAmigo(Pessoa $pessoa){
        array_push($this->amigos, $pessoa);
    }

    public function briga(Pessoa $pessoa){
        array_push($this->briga, $pessoa);
    }

}

$luis = new Pessoa();
$luis->setNome("Luíz");
$luis->setIdade(14);

$carina = new Pessoa();
$carina->setNome("Carina");
$carina->setIdade(18);

$eduardo = new Pessoa();
$eduardo->setNome("Eduardo");
$eduardo->setIdade(22);

$paula = new Pessoa();
$paula->setNome("Paula");
$paula->setIdade(16);

$luiza = new Pessoa();
$luiza->setNome("Luiza");
$luiza->setIdade(14);

$paula->adicionaAmigo($luiza);
$paula->adicionaAmigo($carina);

$eduardo->adicionaAmigo($paula);
$eduardo->adicionaAmigo($luis);

?>