<?php

namespace metahuman\mutant;

use metahuman\Metahuman;

class Mutant extends Metahuman {
    public $powers;
    public $weakness;

    function __construct($name, $age, $sex, $powers, $weakness) {
        parent::__construct($name, $age, $sex);
        $this->powers = $powers;
        $this->weakness = $weakness;
    }

    function printInfo() {
        parent::printInfo();
        echo "My powers are {$this->powers} and I have {$this->weakness} as my nemesis";
        echo"<br>";
        
        
    }
}
