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
        return $user = $this->repository->getUser($user);
    }

    public function insert($user) {
        // retrieve data
        $this->repository->insert($user);        
    }
}

?>