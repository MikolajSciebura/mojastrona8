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
        $scriptName = $_SERVER['SCRIPT_NAME']; // e.g. /mstechpc/public/index.php or /mstechpc/index.php
        $scriptDir = str_replace('\\', '/', dirname($scriptName)); // e.g. /mstechpc/public or /mstechpc

        // Try to determine the project root relative to the server root
        // If accessed via the root .htaccess, scriptDir might be the project root.
        // If accessed via public/index.php directly, scriptDir ends in /public.
        $projectRoot = $scriptDir;
        if (substr($projectRoot, -7) === '/public') {
            $projectRoot = substr($projectRoot, 0, -7);
        }

        // Remove the project root from the path to get the relative route
        if ($projectRoot !== '/' && $projectRoot !== '' && strpos($path, $projectRoot) === 0) {
            $path = substr($path, strlen($projectRoot));
        }

        // Standardize path
        if (empty($path)) $path = '/';
        $path = rtrim($path, '/');
        if (empty($path)) $path = '/';

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
