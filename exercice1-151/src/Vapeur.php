<?php declare(strict_types=1);

include_once 'InterfaceThermostat.php';
include_once 'Appareil.php';

final class Vapeur implements InterfaceThermostat
{ 
    protected Appareil $appareil;
    protected InterfaceInterupteur $bouilloire;
    protected InterfaceInterupteur $lumiere;

    public function __construct()
        {
            $this->bouilloire = new Bouilloire();
            $this->lumiere = new Lumiere();
        }

        public function setAppareil($a):bool{
            $this->appareil = $a;
            return true; //Pour focuser la complexité sur le test
        }

        public function verifier(): bool
        {
            $etat = false;

            if ($this->appareil->getLecture() < 105)
            {
                $etat = $this->bouilloire->changer(true);
            } 
            else 
            {
                $etat = $this->bouilloire->changer(false);
            }

            return $etat;
        }

}

