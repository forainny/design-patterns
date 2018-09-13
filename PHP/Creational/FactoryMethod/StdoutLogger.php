<?php

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        var_dump($message);
    }
}