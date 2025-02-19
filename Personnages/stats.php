<?php

class Stats{
    private int $force;
    private int $agilite;
    private int $intelligence;

    private int $test;

    public function __construct(int $force, int $agilite, int $intelligence) {
        $this->force = $force;
        $this->agilite = $agilite;
        $this->intelligence = $intelligence;
    }
    
    public function getForce(): int {
        return $this->force;
    }
    public function setForce(int $force): self {
        $this->force = $force;
        return $this;
    }

    public function getAgilite(): int {
        return $this->agilite;
    }
    public function setAgilite(int $agilite): self {
        $this->agilite = $agilite;
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