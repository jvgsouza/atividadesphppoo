<?php

include_once './Cima.interface.php';
include_once './Roupa.class.php';

class Camiseta extends Roupa implements Cima{
    public function vestirCima(){
        echo "Vestiu cima";
    }
}

?>