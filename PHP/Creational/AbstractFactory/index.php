<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

$factory = new ParserFactory();
$csvParser = $factory->createCsvParser();
$csvParser->parse('csv');

$jsonParser = $factory->createJsonParser();
$jsonParser->parse('json');