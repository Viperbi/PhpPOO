<?php

include './Class/maison.php';
include './Class/vehicule.php';
include './Interfaces/interfaceArme.php';
include './Armes/arc.php';
include './Armes/epee.php';
include './Armes/projectileMagique.php';
include './AbstractClass/abstractPersonnage.php';
include './Class/voleur.php';
include './Class/guerrier.php';
include './Class/magicien.php';

$home = new Maison('La Casa Pietra',250,300, 2);

echo '<p> La surface de '. $home->getNom() . ' est de ' . $home->surface(). ' m2';

$voiture = new Vehicule("Mercedes CLK", 4, 250);

$moto = new Vehicule("Honda CBR", 2, 280);

echo '<p> La '. $voiture->getNom() . ' est une '. $voiture->detect();
echo '<p> La '. $moto->getNom() . ' est une '. $moto->detect();

$voiture -> boost();

echo '<p> La nouvelle vitess de la '. $voiture->getNom() . ' est de '. $voiture->getVitesseMax();

if (gettype(($voiture->plusRapide($moto)) ==  'Vehicule')){
    echo '<p> Le véhicule le plus rapide est la '. $voiture->plusRapide($moto)->getNom();
}
else {
    echo '<p>'. $voiture->plusRapide($moto);
}

$voleur = new Voleur('Lupin',new Arc(),'Voleur');
$guerrier = new Guerrier('Atila',new Epee,'Guerrier');
$magicien = new Magicien('Merlin',new ProjectileMagique(),'Magicien');
$guerrierNul = new Guerrier('Etila',new ProjectileMagique(),'Guerrier');


$voleur->attaquer();
$guerrier->attaquer();
$magicien->attaquer();
$guerrierNul->attaquer();
