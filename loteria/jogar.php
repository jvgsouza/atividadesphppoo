<?php

include_once ('./MegaSena.class.php');
include_once ('./Quina.class.php');

$game = new MegaSena();
$game->jogar();

echo "<br><br><br>";

$quina = new Quina();
$quina->jogar();

?>