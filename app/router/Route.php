<?php

namespace app\router;

class Route
{
    public static function router()
    {
        $self = new self;
        $base_dir = __DIR__ . '/../view';
        $path = $base_dir . $_SERVER['REQUEST_URI'] . '.php';
        if ($_SERVER['REQUEST_URI'] === '/home') {
            require_once $base_dir . '/home.php';
            die;
        }
        if ($_SERVER['REQUEST_URI'] === '/') {
            require_once $base_dir . '/home.php';
            die;
        }
        if (!file_exists($path)) {
            require_once $base_dir . '/error/404.php';
            die;
        }
        require_once $path;
        die;
    }
}