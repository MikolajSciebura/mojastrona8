<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'mstechpc');
define('DB_USER', 'root');
define('DB_PASS', '');

// Detect SITE_URL automatically for local development
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$script = $_SERVER['SCRIPT_NAME'] ?? '';
$dir = str_replace('\\', '/', dirname($script));
$dir = str_replace('/public', '', $dir);
if ($dir === '/') $dir = '';
define('SITE_URL', $protocol . "://" . $host . $dir);

define('SITE_NAME', 'MSTechPC');

// Error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
