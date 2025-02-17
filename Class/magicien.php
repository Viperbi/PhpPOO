<?php
class Magicien extends AbstractPersonnage {

    private int $mana =  10;
    public function afficher():void{
        echo 'Je suis un magicien';
    }

    public function attaquer(): void{
        $this->mana -=1;
        $this->getArme()->attaquer();
        if ($this->mana == 0){
            echo 'Vous avez utilisé tout votre pouvoir, vous tomber inconscient';
        }
    }
}