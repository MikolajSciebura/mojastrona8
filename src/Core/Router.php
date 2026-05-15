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

        // Handle subdirectory installations (like XAMPP)
        $scriptName = dirname($_SERVER['SCRIPT_NAME']);
        if ($scriptName !== '/') {
            $uri = str_replace($scriptName, '', $uri);
        }
        if ($uri === '') $uri = '/';

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
