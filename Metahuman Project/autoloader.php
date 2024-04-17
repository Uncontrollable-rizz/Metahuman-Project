<?php

// spl_autoload_register(function ($class) {
//     $classPath = __DIR__ . '/' . str_replace("\\", "/", $class) . '.php';
//     include_once($classPath);
// });



spl_autoload_register(function ($class) {
    $classPath = str_replace("\\", "/", $class) . '.php';
    include_once(__DIR__ . '/' . $classPath);
});
