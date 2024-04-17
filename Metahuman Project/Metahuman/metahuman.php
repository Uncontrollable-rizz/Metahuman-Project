<?php

namespace metahuman;

class Metahuman {
    public $name;
    public $age;
    public $sex;

    function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    function printInfo() {
        echo "I am {$this->name}, I am {$this->age} years old, I identify as {$this->sex}\n";
        echo "<br>";
    }
}
