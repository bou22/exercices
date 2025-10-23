<?php declare(strict_types=1);

interface InterfaceThermostat 
{
    public function allumer(): bool;
    public function eteindre(): bool;
}