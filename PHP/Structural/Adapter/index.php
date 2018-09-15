<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

$book = new Book();
$book->open();
$book->turnPage();

$kindle = new Kindle();
$eBook = new EBookAdapter($kindle);
$eBook->open();
$eBook->turnPage();