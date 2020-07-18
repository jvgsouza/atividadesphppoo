<?php

include_once './Estojo.php';
include_once './Lapis.php';
include_once './Lapiseira.php';
include_once './Caneta.php';
include_once './Borracha.php';
include_once './Corretivo.php';


//Criar 2 canetas bic, uma na cor vermelha e outra na cor preta, e colocá-las no estojo 1; 
$caneta = new Caneta();
$caneta->setCor("vermelha");
$caneta->setMarca("bic");

$caneta2 = new Caneta();
$caneta2->setCor("preta");
$caneta2->setMarca("bic");

$estojo = new Estojo();
$estojo->adicionaitem($caneta);
$estojo->adicionaitem($caneta2);

//Criar um lápis HB e uma borracha, e colocá-los no estojo 2;
$lapis = new Lapis();
$lapis->setTipo("Escrita");
$lapis->setMarca("HB");

$borracha = new Borracha();
$borracha->setTipo("Borracha de Desenho");

$estojo2 = new Estojo();
$estojo2->adicionaitem($lapis);
$estojo2->adicionaitem($borracha);

//Pegar (sem tirar) a borracha do estojo 2, e colocá-la no estojo 1;
$estojo->adicionaitem($borracha);

//Pergunta: conforme o diagrama, é possível a borracha estar em dois estojos?

//Sim, é possível pois não ha nada que impeça isso de acontecer.

?>