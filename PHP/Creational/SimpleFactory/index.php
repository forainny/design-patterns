<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

$factory = new SimpleFactory();
$bicycle = $factory->createBicycle();
$bicycle->driveTo('Paris');