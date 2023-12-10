<html>
    <head>
        <title>TP1 : Chien</title>
    </head>
    <body>
<?php

require ("chien.php");

$chien1 = new chien ("labrador", 5, 20);
$chien2 = new chien ("berger", 3, 15);
echo "<h1> TP1 : Chien </h1>";
echo "<h2> Chien 1 </h2>";
echo $chien1->affichage();
echo "<h2> Chien 2 </h2>";
echo $chien2->affichage();

echo "<hr> etape 1 : chien 1 prend un an de plus <br>";
$chien1->vieillir();
echo $chien1->affichage();

echo "<hr> etape 2 : chien 2 prend 1.5kg <br>";
$chien2->grossir(1.5);
echo $chien2->affichage();

echo "<hr> etape 3 : chien 1 perd 2kg <br>";
$chien1->maigrir(2);
echo $chien1->affichage();

?>
    </body>
</html>