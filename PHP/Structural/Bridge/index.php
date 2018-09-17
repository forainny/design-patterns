<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

$service = new HelloWorldService(new PlainTextFormatter());
$service->get();

$service->setImplementation(new HtmlFormatter());
$service->get();