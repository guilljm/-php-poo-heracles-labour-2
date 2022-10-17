<?php

class Shield
{
    private int $protection = 10;
    private string $image = 'assets/images/' . 'sword.svg';

    public function setProtection($protection): void
    {
        $this->protection = $protection;
    }

    public function getProtection(): int
    {
        return $this->protection;
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
