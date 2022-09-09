<?php

require __DIR__ . '/AbstractLogger.php';

class ApiLogger extends AbstractLogger
{
    public function __construct()
    {

    }

    public static function log(string $infoToLog) : bool
    {
        $now = (new DateTime())->format('H:i d.m.Y');
        fwrite($this->logger, "[API] [{$now}] {$infoToLog}\n");
    }

    public function setLoggerFile(string $infoToLog) : bool
    {
        $this->logger = fopen($infoToLog, 'a');
    }
}