<?php


class chien {
    public $race;
    public $age;
    public $poid;
    
    function _construct($r,$a,$p) {
        $this -> race = $r;
        $this -> age = $a;
        $this -> poid = $p;
    }

        //methode affichage de toutes les infos
        function affichage(){
            echo "race: " . $this->race ." / age: " . $this->age. " / poid" .$this->poid;
        }

        //methode pour augmenter l'age de un an
        function vieillir () {
            $this -> age = $this -> age + 1;
        }

        //methode pour augmenter le poid d'une valeur précise
        function grossir($v) {
            $this->poid = $this->poid + $v;
        }

}

?>