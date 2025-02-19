<?php
class ProjectileMagique implements interfaceWeapon{
    private string $type;
    public function __construct(){
        $this->type = "ProjectileMagique";
    }
    public function getType(): string{
        return $this->type;
    }
    public function setType(string $type): ProjectileMagique{
        $this->type = $type;
        return $this;
    }
    public function afficher():void{
        echo "<p>Je suis un projectile magique</p>";
    }

    public function attaquer(): int{
            $temp = rand(4,6);
        return $temp;
    }
}