<?php

namespace metahuman\nonmutant\villain;
use metahuman\nonmutant\NonMutant;

class Villain extends NonMutant{
    public $kill;
    public $strategy;

    function __construct($name, $age, $sex, $weapons, $gadgets,$kill,$strategy){
        parent:: __construct($name,$age,$sex,$weapons,$gadgets);
        $this->kill = $kill;
        $this->strategy = $strategy;
    }

    function printInfo(){
        parent::printInfo();
        echo "I killed them by {$this->kill} via {$this->strategy}";
    }
}