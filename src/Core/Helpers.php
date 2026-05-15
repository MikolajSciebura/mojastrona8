<?php

if (!function_name_exists('e')) {
    function e($value) {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_name_exists('asset')) {
    function asset($path) {
        $path = ltrim($path, '/');
        return SITE_URL . '/public/' . $path;
    }
}

function function_name_exists($name) {
    return function_exists($name);
}
