<?php

class Weapon
{
    private int $damage = 10;
    private string $image = 'assets/images/' . 'sword.svg';

    public function setDamage($damage): void
    {
        $this->damage = $damage;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function setImage($image): void
    {
        $this->image = 'assets/images/' . $image;
    }

    public function getImage(): string
    {
        return $this->image;
    }
}
