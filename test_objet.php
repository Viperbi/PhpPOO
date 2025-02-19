<?php
include './Interfaces/InterfaceWeapon.php';
include './weapons/Bow.php';
include './weapons/Sword.php';
include './weapons/SpellBook.php';
include './AbstractClass/AbstractCharacter.php';
include './Class/Rogue.php';
include './Class/warrior.php';
include './Class/Mage.php';


$Rogue = new Rogue('Lupin',new Bow(),'Rogue');
$Warrior = new Warrior('Atila',new Sword,'warrior');
$Mage = new Mage('Merlin',new SpellBook(),'Mage');
$WarriorNul = new Warrior('Etila',new SpellBook(),'warrior');


$Rogue->attack();
$warrior->attack();
$Mage->attack();
$warriorNul->attack();
