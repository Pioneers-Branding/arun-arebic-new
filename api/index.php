<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Set working directory to project root so relative includes work seamlessly
chdir(dirname(__DIR__));

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$file = ltrim($uri, '/');

if ($file === '' || $file === '/') {
    $file = 'index.php';
}

$target = __DIR__ . '/../' . $file;

if (file_exists($target) && is_file($target) && pathinfo($target, PATHINFO_EXTENSION) === 'php') {
    require $target;
    exit;
}

// Default fallback to index.php
require __DIR__ . '/../index.php';
