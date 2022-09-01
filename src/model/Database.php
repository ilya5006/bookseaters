<?php

class Database {
    private mysqli $connection;
    
    public function __construct(
        private string $dbHost,
        private string $dbLogin,
        private string $dbPassword,
        private string $dbName,
    ) {
        $this->connection = new mysqli($dbHost, $dbLogin, $dbPassword, $dbName);
    }

    public function query(string $query) {
        $queryResult = $this->connection->query(
            $this->connection->escape_string($query),
        );

        return $queryResult->fetch_all(MYSQLI_ASSOC);
    }
}