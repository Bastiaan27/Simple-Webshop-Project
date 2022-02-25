<?php
require_once __DIR__ . '/repository.php';
require_once __DIR__ . '/../models/user.php';

class UserRepository extends Repository
{
    function getByUserName($username){
        try {
            $stmt = $this->connection->prepare("SELECT `id`, `username`, `password`, `email`, `address` FROM `users` WHERE username=?");
            $stmt->execute([$username]);
            
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $user = $stmt->fetch();
            return $user;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function getUser($user)
    {
        try {
            $stmt = $this->connection->prepare("SELECT `id`, `username`, `password`, `email`, `address` FROM `users` WHERE name='$user->getName();' AND password='$user->getPassword();'");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $user = $stmt->fetch();

            return $user;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function insert($user) {
        try {
            $stmt = $this->connection->prepare("INSERT INTO users (username, `password`, email, `address`) VALUES (?,?,?,?)"); 

            $stmt->execute([$user->getUserName(), $user->getPassword(), $user->getEmail(), $user->getAddress()]);

        } catch (PDOException $e) {
            echo $e;
        }
    }
}