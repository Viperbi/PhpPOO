<?php
class SpellBook implements InterfaceWeapon{
    private string $type;
    public function __construct(){
        $this->type = "SpellBook";
    }
    public function getType(): string{
        return $this->type;
    }
    public function setType(string $type): SpellBook{
        $this->type = $type;
        return $this;
    }
    public function display():void{
        echo "<p>Je suis un projectile magique</p>";
    }

    public function attack(): int{
            $temp = rand(4,6);
        return $temp;
    }
}