<?php

include './Class/maison.php';

$home = new Maison('La Casa Pietra','250','300');

echo '<p> La surface de '. $home->getNom() . ' est de ' . $home->surface($home->getLongueur(), $home->getLargeur()). ' m2';