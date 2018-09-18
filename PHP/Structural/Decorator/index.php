<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

$booking = new DoubleRoomBooking();
$booking->calculatePrice();
$booking->getDescription();

$booking = new WiFi($booking);
$booking->calculatePrice();
$booking->getDescription();

$booking = new ExtraBed($booking);
$booking->calculatePrice();
$booking->getDescription();