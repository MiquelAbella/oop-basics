<?php
class StringInstrument extends Instrument
{
    protected $stringNum;
    protected $type;
    private $isTuned = false;
    static public $hasStrings = true;

    public function __construct(string $name, string $family, string $pitch, string $type, int $stringNum)
    {
        parent::__construct($name, $family, $pitch);
        $this->stringNum = $stringNum;
        $this->type = $type;
    }

    public function makeSound(): string
    {
        switch ($this->pitch) {
            case ("sharp"):
                return "<p><strong>Sound: </strong> A $this->name is playing a sharp beautiful sound...</p>";
                break;
            case ("bass"):
                return "<p><strong>Sound: </strong> A $this->name is playing a bass beautiful sound...</p>";
                break;
            default:
                "<p><strong>Sound: </strong> A $this->name is playing a non very defined sound</p>";
        }
    }

    public function getName()
    {
        return "<h2>$this->name</h2>";
    }

    public function getTuned()
    {
        $this->isTuned = true;
        return "<p><strong>Tuning:</strong> Now your $this->name is in tune!</p>";
    }

    public function play()
    {
        return $this->isTuned
            ? "<p>Oh! Thanks god you have tuned the $this->name, now it sounds much better</p>"
            : "<p>Oh! please tune the $this->name, it sounds really bad</p>";
    }

    public function getDescription(): string
    {
        return $this->stringNum > 1
            ? "<p><strong>Description: </strong> A $this->name is a $this->family instrument with $this->type $this->stringNum strings that makes a $this->pitch plesant sound.</p>"
            : "<p><strong>Description: </strong> A $this->name is a $this->family instrument with $this->type $this->stringNum string that makes a $this->pitch plesant sound.</p>";
    }

    public function __destruct()
    {
        return "<p>Destructing $this->name</p>";
    }
}
