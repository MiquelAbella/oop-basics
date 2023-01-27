<?php

interface instrumentInterface
{
    public function getDescription(): string;
    public function makeSound(): string;
}

abstract class Instrument implements instrumentInterface
{
    public $name;
    public $family;
    public $pitch;

    public function __construct(string $name, string $family, string $pitch)
    {
        $this->name = $name;
        $this->family = $family;
        $this->pitch = $pitch;
    }

    abstract public function getDescription(): string;
    abstract public function makeSound(): string;
}