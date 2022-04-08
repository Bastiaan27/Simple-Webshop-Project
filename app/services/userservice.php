<?php
require_once __DIR__ . '/../repositories/userrepository.php';


class UserService {

    private $repository;

    function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function getByUserName($username) {
        //retrieve data
        return $this->repository->getByUserName($username);
    }

    public function getUser($user) {
        // retrieve data
        return $this->repository->getUser($user);
    }

    public function insertUser($user) {
        // retrieve data
        $this->repository->insertUser($user);
    }

    public function updateUser($user) {
        // retrieve data
        $this->repository->updateUser($user);
    }

    public function deleteUser($id) {
        // retrieve data
        $this->repository->deleteUser($id);
    }
}