<?php
class Arc implements InterfaceArme{
    private int $munition;
    private string $type;
    public function __construct(){
        $this->munition = 5;
        $this->type = "Arc";
    }

    public function getMunition(): int{
        return $this->munition;
    }
    public function getType(): string{
        return $this->type;
    }
    public function setMunition(int $munition): Arc{
        $this->munition = $munition;
        return $this;
    }
    public function setType(string $type): Arc{
        $this->type = $type;
        return $this;
    }
    public function afficher():void{
        echo "<p>Je suis un arc</p>";
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
        echo "<p>Vous êtes à court de flèches, essayez de lancer votre arc pour vous défendre !";
        return 0;
    }
}