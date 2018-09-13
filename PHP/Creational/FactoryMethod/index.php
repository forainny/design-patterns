<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

$stdoutLoggerFactory = new StdoutLoggerFactory();
$stdoutLogger = $stdoutLoggerFactory->createLogger();

$fileLoggerFactory = new FileLoggerFactory(tempnam(sys_get_temp_dir(), 'file-logger'));
$fileLogger = $fileLoggerFactory->createLogger();
