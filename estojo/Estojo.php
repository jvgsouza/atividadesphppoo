<?php

Class Estojo{

    public function adicionaitem($item) {
        $listaitem = array();
        array_push($listaitem, $item); 
    }

    public function removeitem($item) {
        $listaitem = array();
        $indexitem = array_search($item, $listaitem);
        unset($listaitem[$indexitem]);
        if ($listaitem[$indexitem] == 0) {
            return true;
        } 
        else{
            return false;
        }
    }

    public function mostraitem(){
        $item;
    }
}

?>