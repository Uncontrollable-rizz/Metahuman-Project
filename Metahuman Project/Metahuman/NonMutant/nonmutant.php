<?php


namespace metahuman\nonmutant;

use metahuman\Metahuman;

class NonMutant extends Metahuman{
    public $weapons;
    public $gadgets;

    function __construct($name,$age,$sex,$weapons,$gadgets)
    {
        parent:: __construct($name,$age,$sex);
            $this->weapons = $weapons;
            $this->gadgets = $gadgets;
        
    }

    function printInfo(){
        parent:: printInfo();
        echo "I have my weapon {$this->weapons} and I have my gadget {$this->gadgets}";
        echo "<br>";
    }
}