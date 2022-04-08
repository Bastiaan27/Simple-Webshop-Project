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
        return $this->repository->getAll();
    }

    public function getById($id) {
        // retrieve data
        return $this->repository->getById($id);
    }

    public function insertConsole($console) {
        // retrieve data
        $this->repository->insertConsole($console);
    }

    public function updateConsole($console) {
        // retrieve data
        $this->repository->updateConsole($console);
    }

    public function deleteConsole($id) {
        // retrieve data
        $this->repository->deleteConsole($id);
    }
}