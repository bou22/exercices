<?php declare(strict_types=1);

final class Affichage
{
    protected InterfaceThermostat eau;
    protected InterfaceThermostat vapeur;

    public function __construct ()
    {
        $this->eau = new Eau();
        $this->vapeur = new Vapeur();
    }

    public function getEtats(): array
    {
        $thermostats = array();

        array_push($thermostats,$this->eau->verifier(),$this->vapeur->verifier());

        return $thermostats;
    }
}