<?php
require __DIR__ . '/../repositories/gamerepository.php';


class GameService {
    public function getAll() {
        // retrieve data
        $repository = new GameRepository();
        $games = $repository->getAll();
        return $games;
    }

    public function insert($game) {
        // retrieve data
        $repository = new GameRepository();
        $repository->insert($game);        
    }
}

?>