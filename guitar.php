<?php
class Guitar extends StringInstrument
{
    public $guitarType;

    public function __construct(string $name, string $type, string $pitch, int $stringNum, string $family, string $guitarType)
    {
        parent::__construct($name, $type, $pitch, $stringNum, $family);
        $this->guitarType = $guitarType;
    }

    public function getDescription(): string
    {
        return $this->guitarType == 'classical'
            ? "<p><strong>Description:</strong> A $this->name is a $this->guitarType guitar that belongs to the $this->family instruments family with $this->type $this->stringNum strings that makes a $this->pitch plesant sound.</p>"
            : "<p><strong>Description:</strong> A $this->name is an $this->guitarType guitar that belongs to the $this->family instruments family with $this->type $this->stringNum strings that makes a $this->pitch plesant sound.</p>";
    }
}
