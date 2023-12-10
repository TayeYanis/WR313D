<?php

include('animal.php');
include ('chien.php');
//créer l’instance $bestiole de la classe animal : 
//Nom : ‘Une drôle de bête’, Age : 1, Age théorique maximum : 10, état : ‘vivant’
$bestiole = new Animal('Renard', 1, 10);

// Appeler la méthode : mange(‘fruits’)
$bestiole->mange('fruits');
// Appeler la méthode : mange(‘légumes’)
$bestiole->mange('légumes');
// Appeler la méthode : lire_regime()
echo $bestiole->lire_regime();
// Appeler la méthode : lire_informations()
echo $bestiole->lire_informations();
// Appeler la méthode : vieillir(4)
$bestiole->vieillir(4);
// Appeler la méthode : lire_informations()
echo $bestiole->lire_informations();
// Appeler la méthode : vieillir(6)
$bestiole->vieillir(6);
// Appeler la méthode : lire_informations()
echo $bestiole->lire_informations();

echo "<h2> exercice 2: chien heritage de animal</h2>"
$chien1= new Chien ('Rex', 'berger australien', 2, 15);

?>