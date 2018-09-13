<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

$fooPrototype = new FooBookPrototype();
$barPrototype = new BarBookPrototype();

for ($i = 0; $i < 10; $i++) {
    $book = clone $fooPrototype;
    $book->setTitle("Foo Book No $i");
    var_dump($book->getTitle());
}

for ($i = 0; $i < 10; $i++) {
    $book = clone $barPrototype;
    $book->setTitle("Bar Book No $i");
    var_dump($book->getTitle());
}