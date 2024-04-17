<?php

require_once 'autoloader.php';

use metahuman\Metahuman as mm;
use metahuman\mutant\Mutant;
use metahuman\mutant\hero\Hero;
use metahuman\mutant\villain\Villain;
use metahuman\nonmutant\NonMutant;
use metahuman\nonmutant\hero\Hero as heroic;
use metahuman\nonmutant\villain\Villain as enemy;


// Example Usage
$metahuman = new mm("John", 25, "Male");
$metahuman->printInfo();

$mutant = new Mutant("Wonderwoman", 30, "Female", "Super Strength", "Kryptonite");
$mutant->printInfo();

$hero = new Hero("Hal Jordan", 27, "Male", "Lantern Ring", "Color Yellow", "Green Lantern", "Green Lantern Corps");
$hero->printInfo();

$villain = new Villain("Arthur Fleck", 35, "Male", "Fear Toxin", "Batman", "The Joker", "Three Jokers");
$villain->printInfo();

$non = new NonMutant("Eugene", 20, "Male", "Pencil", "laptop");
$non->printInfo();

$nmh = new heroic("Hugh" , 22, "Everyday", "Words","Cellphone", "Females", "Cedric" );
$nmh->printInfo();

$nvm = new enemy("Johan Liebert", 22, "Male", "Words","Makeup","Make the victim commit suicide", "Manipulation");
$nvm->printInfo();