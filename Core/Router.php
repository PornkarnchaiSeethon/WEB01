<?php

namespace Core;

class Router
{
    private $routes = [];

    public function add($uri,$controller,$method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];

        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add($uri,$controller,"GET");
    }

    public function post($uri, $controller)
    {
        return $this->add($uri,$controller,"POST");
    }

    public function put($uri, $controller)
    {
        return $this->add($uri,$controller,"PUT");
    }

    public function delete($uri, $controller)
    {
        return $this->add($uri,$controller,"DELETE");
    }

    public function only($key)
    {
        dd($key);
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
