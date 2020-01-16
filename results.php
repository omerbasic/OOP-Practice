<?php 

abstract class Animal {
    protected $name;
    public $height;
    public $age;
    public $weight;

    function __construct($inputName) {
        $this->name = $inputName;
    }

    abstract function makeSound();
}

class Lion extends Animal {

    public $furLength;
    public $clawSharpness;

    function __construct($iName, $iFurLength, $iClawSharpness) {
        $this->name = $iName;
        $this->furLength = $iFurLength;
        $this->clawSharpness = $iClawSharpness;
    }

    public function makeSound() {
        return "GRRRRRR!";
    }
}

class Whale extends Animal {

    public $simKunnighet;
    public $numberOfFins;

    function __construct($iName, $iSimKunnighet, $iNumberOfFins) {
        $this->name = $iName;
        $this->simKunnighet = $iSimKunnighet;
        $this->numberOfFins = $iNumberOfFins;
    }

    public function makeSound() {
        return "whiiiiihooo!";
    }
}

$lion = new Lion("Steffe", 3, "SHARP"); 
$whale = new Whale("Lina", 10, "5"); 

echo $lion->makeSound();
echo $whale->makeSound();

?>