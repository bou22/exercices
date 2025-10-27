<?php declare(strict_types=1);

interface InterfaceThermostat 
{
    public function setAppareil($a): null;
    public function verifier(): bool;
}