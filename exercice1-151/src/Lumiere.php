<?php declare(strict_types=1);

include_once 'InterfaceInterupteur.php';

final class Lumiere implements InterfaceInterupteur
{
    protected bool $etat;

    public function __construct ()
    {
        $this->etat = true;
    }

    public function changer(bool $action): bool
    {
        $this->etat = $action;
        return $this->etat;
    }
}
