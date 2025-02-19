<?php
class HealingPotion extends AbstractItem implements InterfaceConsumable{
    
    public function effect(): self{
        return $this;
    }

    public function display(): void{
        echo 'Healing Potion here';
    }
}