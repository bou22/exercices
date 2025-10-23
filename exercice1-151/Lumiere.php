<?php declare(strict_types=1);

final class Lumiere implements InterfaceInterupteur
{
    bool etat;

    public function __construct ()
    {
        $this->etat = true;
    }

    public function changer(bool $action): bool
    {
        $this->etat = !$this->etat;
        return $this->etat;
    }
}
