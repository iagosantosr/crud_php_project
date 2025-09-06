<?php
namespace App\Service;

use App\Repository\UserRepository;
use App\Model\User;

class UserService {
    private $repo;

    public function __construct(UserRepository $repo) {
        $this->repo = $repo;
    }

    public function getAllUsers() {
        return $this->repo->all();
    }

    public function getUser($id) {
        return $this->repo->find($id);
    }

    public function createUser($data) {
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $this->repo->save($user);
    }

    public function updateUser($id, $data) {
        $user = $this->repo->find($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $this->repo->update($user);
    }

    public function deleteUser($id) {
        $this->repo->delete($id);
    }
}
