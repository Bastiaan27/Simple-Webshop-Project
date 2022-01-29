<?php
require_once __DIR__ . '/repository.php';
require __DIR__ . '/../models/console.php';

class ConsoleRepository extends Repository
{
    function getAll()
    {
        try {
            $stmt = $this->connection->prepare("SELECT `id`, `name`, `description`, `price`, `amount`, `photos`, `region` FROM `consoletable`");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'ShopItem');
            $consoles = $stmt->fetchAll();

            return $consoles;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function insert($console) {
        try {
            $stmt = $this->connection->prepare("INSERT into consoletable (name, description, price, amount, state, photos, region) VALUES (?,?,?,?,?,?,?)");            
            
            $stmt->execute([$console->getName(), $console->getDescription(), $console->getPrice(), $console->getAmount(), $console->getState(), $console->getPhotos(), $console->getregion()]);

        } catch (PDOException $e) {
            echo $e;
        }
    }
}