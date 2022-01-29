<?php
require __DIR__ . '/../repositories/consolerepository.php';


class ConsoleService {
    public function getAll() {
        // retrieve data
        $repository = new ConsoleRepository();
        $consoles = $repository->getAll();
        return $consoles;
    }

    public function insert($console) {
        // retrieve data
        $repository = new ConsoleRepository();
        $repository->insert($console);        
    }
}

?>