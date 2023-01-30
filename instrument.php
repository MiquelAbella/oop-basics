<?php

require_once('InstrumentInterface.php');

abstract class Instrument implements instrumentInterface
{
    protected $name;
    protected $family;
    protected $pitch;

    public function __construct(string $name, string $family, string $pitch)
    {
        $this->name = $name;
        $this->family = $family;
        $this->pitch = $pitch;
    }

    abstract public function getDescription(): string;
    abstract public function makeSound(): string;
}
