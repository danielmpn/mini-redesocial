<?php

class RouterCore
{
    private $uri;
    private $method;

    public function __construct()
    {
        $this->initialize();
    }
    public function initialize()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

    }
}
