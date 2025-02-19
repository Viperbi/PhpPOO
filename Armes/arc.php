<?php
class Bow implements interfaceWeapon{
    private int $munition;
    private string $type;
    public function __construct(){
        $this->munition = 5;
        $this->type = "Bow";
    }

    public function getMunition(): int{
        return $this->munition;
    }
    public function getType(): string{
        return $this->type;
    }
    public function setMunition(int $munition): Bow{
        $this->munition = $munition;
        return $this;
    }
    public function setType(string $type): Bow{
        $this->type = $type;
        return $this;
    }
    public function afficher():void{
        echo "<p>Je suis un Bow</p>";
    }

    public function attaquer(): int{
        if($this->munition>0){
            $temp = rand(3,7);
            $this->munition -=1;
            if($this->munition == 0){
                echo '<p>Vous venez de tirer votre dernière flèche';
            }
        return $temp;
        }
        echo "<p>Vous êtes à court de flèches, essayez de lancer votre Bow pour vous défendre !";
        return 0;
    }
}