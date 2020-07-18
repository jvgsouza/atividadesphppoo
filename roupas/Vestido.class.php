<?php

include_once './Cima.interface.php';
include_once './Baixo.interface.php';
include_once './Roupa.class.php';

class Vestido extends Roupa implements Baixo,Cima{

}

?>