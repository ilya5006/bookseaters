<?php

class RouteParser
{
    public function __construct(
        private string $route
    ) {
        $parsedRoute = explode('/', $route);
    }
}