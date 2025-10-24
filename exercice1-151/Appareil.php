<?php declare(strict_types=1);

class Appareil
{
    public function getLecture(): float
    {
        $randomizer = new Random\Randomizer();
        return $randomizer->getFloat(20, 110);
    }
}
