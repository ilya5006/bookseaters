<?php

abstract class AbstractLogger {
    private string $loggerFile;

    abstract public function log(): bool;
    abstract public function setLoggerFile(): bool;
}