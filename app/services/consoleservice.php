<?php
require_once __DIR__ . '/../repositories/consolerepository.php';


class ConsoleService {
    private $repository;

    function __construct()
    {
        $this->repository = new ConsoleRepository();
    }

    public function getAll() {
        // retrieve data
        return $consoles = $this->repository->getAll();
    }

    public function insert($console) {
        // retrieve data
        $this->repository->insert($console);        
    }
}

?>