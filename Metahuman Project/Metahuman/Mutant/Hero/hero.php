<?php

namespace metahuman\mutant\hero;

use  metahuman\mutant\Mutant;

class Hero extends Mutant{
    public $heroname;
    public $organization;

    function __construct($name,$age,$sex,$powers,$weakness,$heroname,$organization)
    {
        parent::__construct($name,$age,$sex,$powers,$weakness);
        $this->heroname = $heroname;
        $this->organization = $organization;
    }

    function printInfo() {
        parent::printInfo();
        echo " I am also known as {$this->heroname} and I belong to the organization {$this->organization}.";
        echo"<br>";
    }
}