<?php

class Stats{
    private int $hp;
    private int $strength;
    private int $agility;
    private int $intelligence;

    //C'est quoi ça ?
    private int $test;

    public function __construct(int $hp,int $strength, int $agility, int $intelligence) {
        $this->hp = $hp;
        $this->strength = $strength;
        $this->agility = $agility;
        $this->intelligence = $intelligence;
    }
    
    public function getHp(): int {
        return $this->hp;
    }
    public function setHp(int $hp): self{
        $this->hp = $hp;
        return $this;
    }

    public function getStrength(): int {
        return $this->strength;
    }
    public function setStrength(int $strength): self {
        $this->strength = $strength;
        return $this;
    }

    public function getAgility(): int {
        return $this->agility;
    }
    public function setAgility(int $agility): self {
        $this->agility = $agility;
        return $this;
    }

    public function getIntelligence(): int {
        return $this->intelligence;
    }
    public function setIntelligence(int $intelligence): self {
        $this->intelligence = $intelligence;
        return $this;
    }
}