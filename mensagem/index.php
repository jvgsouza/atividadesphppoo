<?php

include 'Proprietario.php';
include 'Operadora.php';
include 'Telefone.php';
include 'Sms.php';

//Criando João
$proprietario = new Proprietario();
$proprietario->setNome("Joao");

$operadora = new Operadora();
$operadora->setNome("Tim");

$telefone = new Telefone();
$telefone->setNumero("99999-1234");
$telefone->setProprietario($proprietario);
$telefone->setOperadora($operadora);

//Criando Maria
$proprietario2 = new Proprietario();
$proprietario2->setNome("Maria");

$operadora2 = new Operadora();
$operadora2->setNome("Vivo");

$telefone2 = new Telefone();
$telefone2->setNumero("99999-2222");
$telefone2->setProprietario($proprietario2);
$telefone2->setOperadora($operadora2);

//Criando Antonio
$proprietario3 = new Proprietario();
$proprietario3->setNome("Antônio");

$operadora3 = new Operadora();
$operadora3->setNome("Vivo");

$telefone3 = new Telefone();
$telefone3->setNumero("98888-2013");
$telefone3->setProprietario($proprietario3);
$telefone3->setOperadora($operadora3);

//Mensagem de Joâo convidando Maria para sair
$sms = new Sms();
$sms->setMensagem("Maria, gostaria de sair comigo?");

$date = date_create('2020-04-25');
date_time_set($date, 20, 00);
$sms->setDatahora(date_format($date, 'Y-m-d H:i:s'));

$sms->setRemetente($telefone);
$sms->setDestinatario($telefone2);

//Mensagem de Maria para João
$sms2 = new Sms();
$sms2->setMensagem("João, não poderei sair com você.");

$date2 = date_create('2020-04-25');
date_time_set($date2, 20, 10);
$sms2->setDatahora(date_format($date2, 'Y-m-d H:i:s'));

$sms2->setRemetente($telefone2);
$sms2->setDestinatario($telefone);

//Maria convidando Antonio para sair
$sms3 = new Sms();
$sms3->setMensagem("Antonio, gostaria de sair comigo?");

date_default_timezone_set('America/Sao_Paulo');
$date3 = date('d/m/Y \à\s H:i:s');
$sms3->setDatahora($date3);

$sms3->setRemetente($telefone2);
$sms3->setDestinatario($telefone3);


?>