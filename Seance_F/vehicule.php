<?php

abstract class VehiculeAMoteur
{

    protected $typeMoteur;
    protected $nbPassagers;
    static $nbVehicule;

    public function __construct($typeMoteur, $nbPassagers)
    {
        $this->typeMoteur = $typeMoteur;
        $this->nbPassagers = $nbPassagers;
        self::$nbVehicule++;
    }

    public function __destruct()
    {
        self::$nbVehicule--;
    }

    public function verificationType($type){
        switch ($type) {
            case 'T':
                return 'Le type du moteur est thermique';
                break;

            case 'E':
                return 'Le type du moteur est électrique';
                break;

            default:
                return 'Le type du moteur est probablement incorrect';
        }
    }

    public function verificationNbPassager($nombresPassagers) {
        if (is_int($nombresPassagers)){
            $this->nbPassagers = $nombresPassagers;
        }
    }

}

class Voiture extends VehiculeAMoteur{

    protected $marque;
    protected $puissance;

    public function __construct($typeMoteur, $nbPassagers, $marque, $puissance)
    {
        parent::__construct($typeMoteur, $nbPassagers);
        $this->marque = $marque;
        $this->puissance = $puissance;
    }

    public function lireCaracteristique(){
        return 'Le type du moteur : '.$this->typeMoteur.',<br> le nombre de passagers : '.$this->nbPassagers.',<br> la marque : '.$this->marque.'<br> et la puissance : '.$this->puissance;
    }

}

final class VoitureDeSport extends Voiture {

    private $nbSecondes;

    public function __construct($typeMoteur, $nbPassagers, $marque, $puissance, $nbSecondes)
    {
        parent::__construct($typeMoteur, $nbPassagers, $marque, $puissance);
        $this->nbSecondes = $nbSecondes;
    }

    public function lireCaracteristique(){
        return parent::lireCaracteristique().',<br> la nombre de secondes de zéro à cents : '.$this->nbSecondes;
    }

}

class VoitureTourisme extends Voiture {

    protected $consommation;
    protected $kilometrage;

    public function __construct($typeMoteur, $nbPassagers, $marque, $puissance, $consommation, $kilometrage)
    {
        parent::__construct($typeMoteur, $nbPassagers, $marque, $puissance);
        $this->consommation = $consommation;
        $this->kilometrage = $kilometrage;
    }

    public function lireCaracteristique(){
        return parent::lireCaracteristique().',<br> la consommation : '.$this->consommation.',<br> le kilométrage : '.$this->kilometrage;
    }

    public function utiliser($distance) {
        $this->kilometrage += $distance;
    }

}

class Camion extends VehiculeAMoteur {

    protected $tonnage;
    protected $nbEssieux;

    public function __construct($typeMoteur, $nbPassagers, $tonnage, $nbEssieux)
    {
        parent::__construct($typeMoteur, $nbPassagers);
        $this->tonnage = $tonnage;
        $this->nbEssieux = $nbEssieux;
    }

    public function lireCaracteristique(){
        return 'Le type du moteur : '.$this->typeMoteur.',<br> le nombre de passagers : '.$this->nbPassagers.',<br> le tonnage : '.$this->tonnage.',<br> et le nombre d\'essieux : '.$this->nbEssieux;
    }


}
