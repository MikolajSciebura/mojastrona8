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
        $path = parse_url($uri, PHP_URL_PATH);

        // Handle subdirectory installations (like XAMPP)
        $scriptPath = $_SERVER['SCRIPT_NAME'];
        $baseDir = str_replace('\\', '/', dirname($scriptPath));

        // If project is in a subfolder and accessed via root .htaccess
        $projectBase = str_replace('/public', '', $baseDir);

        if ($baseDir !== '/' && strpos($path, $baseDir) === 0) {
            $path = substr($path, strlen($baseDir));
        } elseif ($projectBase !== '/' && strpos($path, $projectBase) === 0) {
            $path = substr($path, strlen($projectBase));
        }

        if (empty($path)) $path = '/';
        if ($path[0] !== '/') $path = '/' . $path;

        foreach ($this->routes as $route) {
            if ($route['method'] === $method && preg_match($route['path'], $path, $matches)) {
                return $this->executeHandler($route['handler'], $matches);
            }
        }
        http_response_code(404);
        echo "404 Not Found - URI: " . htmlspecialchars($path);
    }

    protected function executeHandler($handler, $matches) {
        list($controller, $action) = explode('@', $handler);
        $controller = "App\\Controllers\\" . $controller;
        $controllerInstance = new $controller();
        $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
        return call_user_func_array([$controllerInstance, $action], $params);
    }
}
