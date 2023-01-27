<?php
require_once('./instrument.php');
require_once('./stringInstrument.php');
require_once('./guitar.php');


$violin = new StringInstrument("violin", "string", "sharp", "bowed", 4);

echo $violin->getName();
echo $violin->getDescription() . "<br/>";
echo $violin->play() . "<br/>";
echo $violin->getTuned() . "<br/>";
echo $violin->play() . "<br/>";
echo $violin->makeSound() . "<br/>";
echo StringInstrument::$hasStrings;
echo $violin->__destruct();

echo "<hr>";


$gibson = new Guitar("Gibson Les Paul", "string", "sharp",  "string", 6, "electric");

echo $gibson->getName();
echo $gibson->getDescription() . "<br/>";
echo $gibson->play() . "<br/>";
echo $gibson->getTuned() . "<br/>";
echo $gibson->play() . "<br/>";
echo $gibson->makeSound() . "<br/>";
