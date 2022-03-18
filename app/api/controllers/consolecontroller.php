<?php
require_once __DIR__ . '/../../models/console.php';
require_once __DIR__ . '/../../services/consoleservice.php';

class ConsoleController {
    private $consoleService;

    function __construct() {
        $this->consoleService = new ConsoleService();
    }

    public function index() {
        if($_SERVER["REQUEST_METHOD"] === "GET") {
            $consoles = $this->consoleService->getAll();
            echo json_encode($consoles);

            //var_dump(json_encode($consoles));
        }
    }
}