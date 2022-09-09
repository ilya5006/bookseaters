<?php

abstract class AbstractLogger
{
    private \resource $loggerFile;

    abstract public function log(string $infoToLog): bool;
    abstract public function setLoggerFile(string $filePath): bool;
}