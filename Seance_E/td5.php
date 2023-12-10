<?php
    require 'vehicule.php';

    // Premier conducteur
    $conducteur1 = new Vehicule('Renault', 20, 1500);
    $conducteur1->AjoutKilometrage(2500);
    $conducteur1->ajoutPuissance(110);
    echo $conducteur1->affichageCaracteristique();

    echo '<br><br>';

    // Deuxième conducteur
    $conducteur2 = new Voiture('Peugeot', 45, 5300, '4x4');
    $conducteur2->AjoutKilometrage(1500);
    $conducteur2->ajoutPuissance(310);
    echo $conducteur2->affichageCaracteristique();
    echo $conducteur2->lire_type();
?>