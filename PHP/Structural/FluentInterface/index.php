<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

$query = (new Sql())
    ->select(['foo', 'bar'])
    ->from('foobar', 'f')
    ->where('f.bar = ?');

echo $query;