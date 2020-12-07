<?php
    spl_autoload_register(function ($class) {
        $path = __DIR__ . "/";
        $classes = array(
            $path ."/". "app/" . $class . ".php", 
            $path ."/". "framework/" . $class . ".php", 
        );

        foreach ($classes as $class) {
            if (file_exists($class)) {
                require $class;
            }
        }
    });
?>