<?php
class Magicien extends AbstractPersonnage {

    private int $mana =  10;
    public function afficher():void{
        echo '<p>Je suis un magicien';
    }

    public function attaquer(): void{
        $this->mana -=1;
        $this->getArme()->attaquer();
        if ($this->mana == 0){
            echo '<p>Vous avez utilisé tout votre pouvoir, vous tomber inconscient';
        }
        echo '<p>Tu attaque avec ton '.$this->getArme()->getType(). ' et fais ' . $this->getArme()->attaquer() . ' points de dégats.';
    }
}