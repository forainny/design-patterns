<?php

interface LoggerFactory
{
    public function createLogger(): Logger;
}