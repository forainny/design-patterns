<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

$pool1 = new WorkerPool();
$worker1 = $pool1->get();
$worker2 = $pool1->get();
var_dump(count($pool1));

$pool2 = new WorkerPool();
$worker3 = $pool2->get();
$pool2->dispose($worker3);
$worker4 = $pool2->get();
var_dump(count($pool2));