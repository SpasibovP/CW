<?php
// точка входа в приложение
// обрабатывает все запросы

require_once __DIR__ .'/../vendor/autoload.php';

use Bb\Blog\App\Router;

Router::run("Bb\Blog\Controllers\\");

