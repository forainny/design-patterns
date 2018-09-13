<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

$truckBuilder = new TruckBuilder();
$newTruck = (new Director())->build($truckBuilder);

$carBuilder = new CarBuilder();
$newCar = (new Director())->build($carBuilder);