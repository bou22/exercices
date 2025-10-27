<?php declare(strict_types=1);

class Appareil
{
    public function getLecture(): float
    {
        $randomizer = new Random\Randomizer();
        // C'est une simulation non destinée aux tests automatisés.
        return $randomizer->getFloat(20, 110);
    }
}
