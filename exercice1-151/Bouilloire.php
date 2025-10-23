<?php declare(strict_types=1);

final class Bouilloire implements InterfaceInterupteur
{
    bool etat;

    public function __construct ()
    {
        $this->etat = true;
    }

    public function changer(bool $action): bool
    {
        $this->etat = action;
        return $this->etat;
    }
}
