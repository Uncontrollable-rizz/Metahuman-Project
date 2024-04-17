<?php

namespace metahuman\nonmutant\hero;

use metahuman\nonmutant\NonMutant;

class Hero extends NonMutant {

    public $fave;
    public $sidekick;

    function __construct($name, $age, $sex, $weapons, $gadgets, $fave, $sidekick)
    {
        parent::__construct($name, $age, $sex, $weapons, $gadgets);
        $this->fave = $fave;
        $this->sidekick = $sidekick;
    }

    function printInfo()
    {
        parent::printInfo();
        echo "I love {$this->fave} and my sidekick is {$this->sidekick}.";
        echo "<br>";
    }
}
