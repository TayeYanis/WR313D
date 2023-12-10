<?php

    class Animal {
        private string $nom;
        private int $age;
        private int $ageMax;
        private string $etat;
        private array $regime;
        
        public function __construct($n, $a, $am) {
            $this->nom=$n;
            $this->age=$a;
            $this->ageMax=$am;
            $this->etat="vivant";
            $this->regime= array();
        }
        public function mange ($nourriture) {
            if ($this->etat =="vivant") {
                array_push ($this->regime, $nourriture);
            }
        }
        public function lire_regime () {
            $message="il a mangé";
            if ($this->etat=="vivant") {
                $message= $this->nom . "a mangé :";
                foreach ($this->regime as $nourriture) {
                    $message= $message . $nourriture . ",";
                }
            }
            else {
                $message=$this->nom. " est mort";
            }
            return $message;
        }
        public function veillir($annees) {
            if ($this->etat=="vivant") {
                $this->age= $this->age +$annes;
            }
            if ($)

        }
    }
?>