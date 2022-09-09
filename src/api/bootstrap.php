<?php

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../helpers/routeparser/RouteParser.php';
require_once __DIR__ . '/../helpers/database/Database.php';

$db = new Database(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
$routeParser = new RouteParser(
    rtrim($_SERVER['REQUEST_URI'], '/')
);
