<?php

namespace Core;

class Router
{
    private $routes = [];

    public function get($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => "GET"
        ];
    }

    public function post($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => "POST"
        ];
    }

    public function put($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => "PUT"
        ];
    }

    public function delete($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => "DELETE"
        ];
    }

    public function route($uri, $method)
    {
        foreach($this->routes as $routes){
            if ($routes['uri'] == $uri && $routes['method'] == $method)
            {
                return require base_part($routes["controller"]);
            }
        }
    }
}
