<?php
class Mage extends AbstractCharacter {

    private int $mana =  10;
    public function display():void{
        echo '<p>Je suis un Mage';
    }

    public function attack(): void{
        $this->mana -=1;
        $this->getWeapon()->attack();
        if ($this->mana == 0){
            echo '<p>Vous avez utilisé tout votre pouvoir, vous tomber inconscient';
        }
        echo '<p>Tu attaque avec ton '.$this->getWeapon()->getType(). ' et fais ' . $this->getWeapon()->attack() . ' points de dégats.';
    }
}