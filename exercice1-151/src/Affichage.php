<?php declare(strict_types=1);

include_once 'InterfaceInterupteur.php';
include_once 'InterfaceThermosthat.php';

final class Affichage
{
    protected InterfaceThermostat $eau;
    protected InterfaceThermostat $vapeur;

    public function __construct ()
    {
        $this->eau = new Eau();
        $this->vapeur = new Vapeur();
    }

    public function getEtats(): array
    {
        $listeThermostats = array();

        array_push($listeThermostats,$this->eau->verifier(),$this->vapeur->verifier());

        return $listeThermostats;
    }
}