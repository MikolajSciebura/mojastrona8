<?php

spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/../src/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../src/Core/Helpers.php';

use App\Core\Router;

$router = new Router();

// Define routes
$router->add('GET', '/', 'HomeController@index');
$router->add('GET', '/logowanie', 'AuthController@showLogin');
$router->add('POST', '/logowanie', 'AuthController@login');
$router->add('GET', '/rejestracja', 'AuthController@showRegister');
$router->add('POST', '/rejestracja', 'AuthController@register');
$router->add('GET', '/wyloguj', 'AuthController@logout');
$router->add('GET', '/konto', 'UserController@profile');

$router->add('GET', '/sklep', 'ShopController@index');
$router->add('GET', '/produkt/{slug}', 'ShopController@show');
$router->add('GET', '/konfigurator', 'ConfiguratorController@index');
$router->add('POST', '/konfigurator/zapisz', 'ConfiguratorController@save');
$router->add('GET', '/serwis', 'ShopController@service');
$router->add('GET', '/koszyk', 'CartController@index');
$router->add('POST', '/koszyk/dodaj', 'CartController@add');
$router->add('GET', '/checkout', 'CheckoutController@index');
$router->add('POST', '/checkout/proces', 'CheckoutController@process');
$router->add('GET', '/faktura', 'CheckoutController@invoice');

$router->add('GET', '/admin', 'AdminController@dashboard');
$router->add('GET', '/admin/produkty', 'AdminController@products');
$router->add('GET', '/admin/produkty/dodaj', 'AdminController@productsCreate');
$router->add('POST', '/admin/produkty/dodaj', 'AdminController@productsStore');
$router->add('GET', '/admin/blog', 'AdminController@blog');
$router->add('GET', '/admin/blog/dodaj', 'AdminController@blogCreate');
$router->add('GET', '/admin/serwis', 'AdminController@technician');

$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
