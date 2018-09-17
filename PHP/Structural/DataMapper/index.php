<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

$storage = new StorageAdapter([1 => ['username' => 'name', 'email' => 'example@email.com']]);
$mapper = new UserMapper($storage);
$user = $mapper->findById(1);