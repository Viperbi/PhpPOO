<?php

include './Class/maison.php';
include './Class/vehicule.php';
include './Interfaces/interfaceWeapon.php';
include './weapons/Bow.php';
include './weapons/Sword.php';
include './weapons/projectileMagique.php';
include './AbstractClass/abstractPersonnage.php';
include './Class/voleur.php';
include './Class/guerrier.php';
include './Class/magicien.php';

$home = new Maison('La Casa Pietra',250,300, 2);

echo '<p> La surface de '. $home->getname() . ' est de ' . $home->surface(). ' m2';

$voiture = new Vehicule("Mercedes CLK", 4, 250);

$moto = new Vehicule("Honda CBR", 2, 280);

echo '<p> La '. $voiture->getname() . ' est une '. $voiture->detect();
echo '<p> La '. $moto->getname() . ' est une '. $moto->detect();

$voiture -> boost();

echo '<p> La nouvelle vitess de la '. $voiture->getname() . ' est de '. $voiture->getVitesseMax();

if (gettype(($voiture->plusRapide($moto)) ==  'Vehicule')){
    echo '<p> Le véhicule le plus rapide est la '. $voiture->plusRapide($moto)->getname();
}
else {
    echo '<p>'. $voiture->plusRapide($moto);
}

$voleur = new Voleur('Lupin',new Bow(),'Voleur');
$guerrier = new Guerrier('Atila',new Sword,'Guerrier');
$magicien = new Magicien('Merlin',new ProjectileMagique(),'Magicien');
$guerrierNul = new Guerrier('Etila',new ProjectileMagique(),'Guerrier');


$voleur->attaquer();
$guerrier->attaquer();
$magicien->attaquer();
$guerrierNul->attaquer();
