<?php

include './Class/maison.php';
include './Class/vehicule.php';
include './Interfaces/InterfaceWeapon.php';
include './weapons/Bow.php';
include './weapons/Sword.php';
include './weapons/SpellBook.php';
include './AbstractClass/AbstractCharacter.php';
include './Class/voleur.php';
include './Class/guerrier.php';
include './Class/magicien.php';

$home = new Maison('La Casa Pietra',250,300, 2);

echo '<p> La surface de '. $home->getName() . ' est de ' . $home->surface(). ' m2';

$voiture = new Vehicule("Mercedes CLK", 4, 250);

$moto = new Vehicule("Honda CBR", 2, 280);

echo '<p> La '. $voiture->getName() . ' est une '. $voiture->detect();
echo '<p> La '. $moto->getName() . ' est une '. $moto->detect();

$voiture -> boost();

echo '<p> La nouvelle vitess de la '. $voiture->getName() . ' est de '. $voiture->getVitesseMax();

if (gettype(($voiture->plusRapide($moto)) ==  'Vehicule')){
    echo '<p> Le véhicule le plus rapide est la '. $voiture->plusRapide($moto)->getName();
}
else {
    echo '<p>'. $voiture->plusRapide($moto);
}

$voleur = new Voleur('Lupin',new Bow(),'Voleur');
$guerrier = new Guerrier('Atila',new Sword,'Guerrier');
$magicien = new Magicien('Merlin',new SpellBook(),'Magicien');
$guerrierNul = new Guerrier('Etila',new SpellBook(),'Guerrier');


$voleur->attack();
$guerrier->attack();
$magicien->attack();
$guerrierNul->attack();
