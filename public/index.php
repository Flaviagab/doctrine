<?php

use App\Controller\ComprasController;
use App\Controller\NotFoundController;
use App\Controller\UserController;

require_once __DIR__ . '/../vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$pages = [
    '/user' => new UserController,
    '/compras' => new ComprasController
];

$controller = $pages[$uri] ?? new NotFoundController;
$controller->render();

