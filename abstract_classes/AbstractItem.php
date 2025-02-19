<?php

abstract class AbstractItem{
    //Attribut
    private ?string $name;
    private string $nbUse;

    public function __construct(string $name, string $nbUse){
        
    }

    public abstract function display(): void;
    
}