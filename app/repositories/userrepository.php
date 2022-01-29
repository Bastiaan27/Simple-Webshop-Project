<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/user.php';

class UserRepository extends Repository
{
    function getByUserName($username){
        try {
            $stmt = $this->connection->prepare("SELECT `id`, `username`, `password`, `email`, `address` FROM `users` WHERE username='$username'");
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
            $stmt = $this->connection->prepare("SELECT * FROM consoletable WHERE name='$user->getName();' AND password='$user->getPassword();'");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Console');
            $user = $stmt->fetch();

            return $user;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function insert($user) {
        try {
            $stmt = $this->connection->prepare("INSERT into users (name, password, email, address, poatal_code) VALUES (?,?,?,?,?)");            
            
            $stmt->execute([$user->getName(), $user->getPassword(), $user->getEmail(), $user->getAddress(), $user->getPostalCode()]);

        } catch (PDOException $e) {
            echo $e;
        }
    }
}