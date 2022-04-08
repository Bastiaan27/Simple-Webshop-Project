<?php
require_once __DIR__ . '/repository.php';
require_once __DIR__ . '/../models/console.php';

class ConsoleRepository extends Repository
{
    function getAll()
    {
        try {
            $stmt = $this->connection->prepare("SELECT id, name, description, price, amount, photos, region FROM consoletable");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Console');
            $consoles = $stmt->fetchAll();

            return $consoles;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function getById($id)
    {
        try {
            $stmt = $this->connection->prepare("SELECT id, name, description, price, amount, photos, region FROM consoletable WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Console');
            $console = $stmt->fetch();

            return $console;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function insertConsole($console) {
        try {
            $stmt = $this->connection->prepare("INSERT INTO consoletable (name, description, price, amount, photos, region) 
                                                VALUES (?,?,?,?,?,?)");
            
            $stmt->execute([$console->getName(), $console->getDescription(), $console->getPrice(), $console->getAmount(), $console->getPhotos(), $console->getRegion()]);

        } catch (PDOException $e) {
            echo $e;
        }
    }

    function updateConsole($console) {
        try {
            $stmt = $this->connection->prepare("UPDATE consoletable SET name = ?, description = ?, price = ?, amount = ?, photos = ?, region = ? WHERE id = ?");
            $stmt->execute([$console->getName(), $console->getDescription(), $console->getPrice(), $console->getAmount(), $console->getPhotos(), $console->getregion(), $console->getId()]);
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function deleteConsole($id) {
        try {
            $stmt = $this->connection->prepare("DELETE FROM consoletable WHERE id = ?");
            $stmt->execute([$id]);
        } catch (PDOException $e) {
            echo $e;
        }
    }
}