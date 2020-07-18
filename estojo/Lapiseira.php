<?php

include_once './CoisaDeEscrever.php';

Class Lapiseira extends CoisaDeEscrever{

    private $grafite;

    public function getGrafite() {
        return $this->grafite;
    }

    public function setGrafite($grafite) {
        $this->grafite = $grafite;
    }

}

?>