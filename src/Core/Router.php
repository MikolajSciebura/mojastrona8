<?php

namespace App\Core;

class Router {
    protected $routes = [];

    public function add($method, $path, $handler) {
        $path = preg_replace('/\{([a-z]+)\}/', '(?P<$1>[^/]+)', $path);
        $this->routes[] = [
            'method' => $method,
            'path' => '#^' . $path . '$#',
            'handler' => $handler
        ];
    }

    public function dispatch($method, $uri) {
        $uri = explode('?', $uri)[0];

        // Handle cases where the site is in a subdirectory or being served from public/
        // If we are using php -S localhost:8000 -t public, the URI should match as is.

        foreach ($this->routes as $route) {
            if ($route['method'] === $method && preg_match($route['path'], $uri, $matches)) {
                return $this->executeHandler($route['handler'], $matches);
            }
        }
        http_response_code(404);
        echo "404 Not Found";
    }

    protected function executeHandler($handler, $matches) {
        list($controller, $action) = explode('@', $handler);
        $controller = "App\\Controllers\\" . $controller;
        $controllerInstance = new $controller();
        $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
        return call_user_func_array([$controllerInstance, $action], $params);
    }
}
