<?php

class Stats{
    private int $strength;
    private int $agility;
    private int $intelligence;

    private int $test;

    public function __construct(int $strength, int $agility, int $intelligence) {
        $this->strength = $strength;
        $this->agility = $agility;
        $this->intelligence = $intelligence;
    }
    
    public function getstrength(): int {
        return $this->strength;
    }
    public function setstrength(int $strength): self {
        $this->strength = $strength;
        return $this;
    }

    public function getagility(): int {
        return $this->agility;
    }
    public function setagility(int $agility): self {
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