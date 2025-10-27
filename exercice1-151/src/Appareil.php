<?php declare(strict_types=1);

include_once 'InterfaceAppareil.php';

class Appareil implements InterfaceAppareilInterfaceAppareil
{
    public function getLecture(): float
    {
        $randomizer = new Random\Randomizer();
        // C'est une simulation non destinée aux tests automatisés.
        return round(($randomizer->getFloat(20, 110)/0.5)*0.5);
    }
}
