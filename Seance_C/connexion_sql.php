<?php


class Connexion_SQL {
    private string $ip;
    private string $base;
    private string $user;
    private string $mdp;

    public function __construct($ip,$base,$user,$mdp) {
        $this->ip=$ip;
        $this->base=$base;
        $this->user=$user;
        $this->mdp=$mdp;
        // tester si l'ip est une adresse ip valide
        if (!filter_var($this->ip, FILTER_VALIDATE_IP)) {
            echo 'L\'adresse IP n\'est pas valide';
            exit();

    $bdd=new PDO('mysql:host='.$this->ip.';dbname='.$this->base.';charset=utf8',$this->user,$this->mdp);
    }
}

    public function lire_connexion(): string {
        return 'ip du serveur de la bd : '.$this->ip.'<br>nom de la base de donnÃ©es : '.$this->base.'<br>nom de l\'utilisateur : '.$this->user.'<br>';
    }

}


?>

<?php
    class Connexion_SQL {
        private string $ip;
        private string $base;
        private string $identifiant;
        private string $motdepasse;

            public function __construct($ip,$base,$identifiant,$motdepasse) {
                $this->ip=$ip;
                $this->base=$base;
                $this->identifiant=$identifiant;
                $this->motdepasse=$motdepasse;
                $bdd=new PDO('mysql:host=' .$this->ip. ';dbname'.$this->base.';charset=utf8',$this->identifiant, $this->motdepasse )
            }
            public function lire_connexion (): string {
                
            }

    }

?>