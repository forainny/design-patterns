<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

$config = new DatabaseConfiguration('localhost', 3306, 'username', 'password');
$connection = new DatabaseConnection($config);
$connection->getDsn();