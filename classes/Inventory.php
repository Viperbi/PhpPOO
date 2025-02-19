<?php

class Inventory {
    private int $size = 20;
    private ?array $items = [];
    private ?int $golds = 0;

    /**
     * Get the value of size
     *
     * @return int
     */
    public function getSize(): int {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size): self {
        $this->size = $size;
        return $this;
    }

    /**
     * Get the value of items
     *
     * @return ?array
     */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Set the value of items
     *
     * @param ?array $items
     *
     * @return self
     */
    public function setItems(?array $items): self {
        $this->items = $items;
        return $this;
    }

    /**
     * Get the value of golds
     *
     * @return ?int
     */
    public function getGolds(): ?int {
        return $this->golds;
    }

    /**
     * Set the value of golds
     *
     * @param ?int $golds
     *
     * @return self
     */
    public function setGolds(?int $golds): self {
        $this->golds = $golds;
        return $this;
    }

    public function addItem(AbstractItem $item): self {
        $temp = $this->getItems(); 
        array_push($temp, $item);
        return $this;
        array_seBowh($item->getId(), $temp);
    }
}