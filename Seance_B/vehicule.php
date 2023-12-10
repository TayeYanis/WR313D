<?php


class Vehicule {
    public $marque;
    public $puissance;
    public $kilometrage;
    function affichage () {
        echo "<p>Marque : " . $this->marque . " </p>";
        echo "<p>Puissance : " . $this->puissance . " </p>";
        echo "<p>Kilometrage : " . $this->kilometrage . " </p>";
    }

    //méthode puissance qui modifera la puissance du véhicule
    function puissance ($p) {
        $this -> puissance = $p;
    }


    function parcours ($k) {
        $this -> kilometrage += $k;
        echo "<p> Nouveau kilométrage : " .$this -> kilometrage."</p>";
    }

}

?>