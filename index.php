<?php
require_once 'vendor/autoload.php';

use App\Controller\UserController;

$controller = new UserController();
$controller->handleRequest();

echo 'Hello Word';
