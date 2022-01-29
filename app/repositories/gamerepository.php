<?php
require_once __DIR__ . '/repository.php';
require __DIR__ . '/../models/game.php';

class GameRepository extends Repository
{
    function getAll()
    {
        try {
            $stmt = $this->connection->prepare("SELECT `id`, `name`, `description`, `price`, `amount`, `photos`, `region` FROM `gametable`");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'ShopItem');
            $games = $stmt->fetchAll();

            return $games;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function insert($game) {
        try {
            $stmt = $this->connection->prepare("INSERT into gametable (name, description, price, amount, photos, region) VALUES (?,?,?,?,?,?)");            
            
            $stmt->execute([$game->getName(), $game->getDescription(), $game->getPrice(), $game->getAmount(), $game->getPhotos(), $game->getregion()]);

        } catch (PDOException $e) {
            echo $e;
        }
    }
}