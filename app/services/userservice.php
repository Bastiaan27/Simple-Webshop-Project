<?php
require __DIR__ . '/../repositories/userrepository.php';


class UserService {

    private $repository;

    function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function getByUserName($username) {
        //retrieve data
        return $this->repo->getByUserName($username);
    }

    public function getUser($user) {
        // retrieve data
        return $user = $this->getUser($user);
    }

    public function insert($user) {
        // retrieve data
        $this->insert($user);        
    }
}

?>