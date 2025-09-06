<?php
namespace App\Controller;

use App\Repository\UserRepository;
use App\Service\UserService;
use PDO;

class UserController {
    private $service;

    public function __construct() {
        require 'config/config.php';
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $repo = new UserRepository($pdo);
        $this->service = new UserService($repo);
    }

    public function handleRequest() {
        $action = $_GET['action'] ?? 'list';

        switch ($action) {
            case 'create':
                $this->service->createUser($_POST);
                break;
            case 'edit':
                $this->service->updateUser($_GET['id'], $_POST);
                break;
            case 'delete':
                $this->service->deleteUser($_GET['id']);
                break;
            case 'list':
            default:
                $users = $this->service->getAllUsers();
                print_r($users);
                break;
        }
    }
}
