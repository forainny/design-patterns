<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

StaticFactory::factory('number');
StaticFactory::factory('string');
StaticFactory::factory('object');