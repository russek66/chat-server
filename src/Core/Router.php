<?php

namespace App\Core;

class Router
{

    public function resolveEndPoint(mixed $uri, string $method): void
    {
        $url = explode('/', $uri);
        $url = array_map('strtolower', $url);

        $this->resolveWeb($url[0], $method);


    }

    public function resolveWeb(string $requestUri, string $requestMethod): void
    {

    }
}