<?php
abstract class Individus {

    protected $nom;
    protected $prenom;
    protected $genre;
    protected $revenu=0;
    protected $conges=0;
    static $nbindividu=0;


    public function __construct($nom, $prenom, $genre, $revenu, $conges) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->genre = $genre;
        $this->revenu = $revenu;
        $this->conges = $conges;
        self::$nbindividu++;
    }

    public function travailler($nombreheures) {
        $this->revenu += $revenu;
    }

    public function reposer($nombrejours) {
        $this->conges += $conges;
    }
    public function sePresente() {
        return 'Je m\'apelle '.$this->nom.' '.$this->prenom;
    }

    public function RAZrevenu($revenu) {
        $this->revenu= 0;
    }

    public function RAZconges($conges) {
        $this->conges= 0;
    }

    public function declareSalaire() {
    }
}

class Etudiant extends Individus{
    protected $numetudiant;
    protected $age;
    protected $formation;
    protected $resultat;
    protected $nbetudiants;

    public static function getNombreIndividus() {
        return self::$nbindividu;
    }


}


?>