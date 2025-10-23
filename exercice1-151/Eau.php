<?php declare(strict_types=1);

include_once 'InterfaceInterupteur.php';
include_once 'Appareil.php';

final class Eau implements InterfaceThermostat
{ 
    protected Appareil appareil;
    protected InterfaceInterupteur bouilloire;
    protected InterfaceInterupteur lumiere;

    public function allumer(): bool
    {
        public function __construct()
        {
            $this->appareil = new Appareil();
            $this->bouilloire = new Bouilloire();
            $this->lumiere = new Lumiere();
        }

        public function verifier()
        {
            $etat = false;

            if ($this->appareil->getLecture() < 105)
            {
                $etat = $this->bouilloire->changer(1);
            } 
            else 
            {
                $etat = $this->bouilloire->changer(0);
            }

            return $etat;
        }

    }
}
