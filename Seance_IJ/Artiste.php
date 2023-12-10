<?php
    abstract class Humain {
         public $nom;
         public $prenom;
         public $date;
    }

    class Artiste extends Humain {
        protected $specialiter;
        protected $image;
        
        public function __construct($nom, $prenom, $date, $specialiter, $image) {
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->date=$date;
            $this->specialiter=$specialiter;
            $this->image=$image;
        }

        public function SePresente() {
            return "Je suis $this->prenom $this->nom, je suis née le $this->date je suis spécialiser dans $this->specialiter $this->image";
        }
    }

    class Dessinateur extends Artiste {
        protected $titre;
        protected $nbPage;
        protected $auteurs= array();

        public function addAuteur ($auteur) {
            $this->auteurs[]=$auteur;
         }
 
    }
    
?>