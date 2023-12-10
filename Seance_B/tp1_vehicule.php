<html>

<head>
    <title>TP1 : Véhicule</title>
</head>
<body>
<?php
    require ("vehicule.php");
    $vehicule1 = new Vehicule();
    $vehicule1->marque = "Renault";
    $vehicule1->puissance = 90;
    $vehicule1->kilometrage = 15000;

    $vehicule2 = new Vehicule();
    $vehicule2->marque = "Peugeot";
    $vehicule2->puissance = 110;
    $vehicule2->kilometrage = 20000;

    echo "<h1> TP1 : Vehicule </h1>";
    echo "<h2> Voiture 1 </h2>";
    echo $vehicule1->affichage();

    echo "<h2> Voiture 2 </h2>";
    echo $vehicule2->affichage();

    echo "<hr>";
    $vehicule1->puissance(200);
    echo "<h2>Nouvelle valeur pour Voiture 1</h2>";
    echo $vehicule1->affichage();

    echo "<hr>";
    $vehicule1->parcours(3500); // modifie le kilometrage et affiche le nouveau kilometrage

    echo "<hr>";
    $vehicule2->parcours(1500); // modifie le kilometrage et affiche le nouveau kilometrage


?>
</body>
</html>