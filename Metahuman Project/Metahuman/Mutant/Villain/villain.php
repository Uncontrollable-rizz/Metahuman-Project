<?php

namespace metahuman\mutant\villain;

use metahuman\mutant\Mutant;

class Villain extends Mutant{
    public $crime;
    public $enemyname;

    function __construct($name,$age,$sex,$powers,$weakness,$crime,$enemyname)
    {
        parent:: __construct($name,$age,$sex,$powers,$weakness);
        $this->crime = $crime;
        $this->enemyname = $enemyname;
    }

    function printInfo(){
        parent:: printInfo();
        echo " I am {$this->enemyname} and I have committed {$this->crime}";
        echo "<br>";
    }
}