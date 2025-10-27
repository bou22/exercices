<?php declare(strict_types=1);

interface InterfaceThermostat 
{
    public function setAppareil($a): bool;
    public function verifier(): bool;
}