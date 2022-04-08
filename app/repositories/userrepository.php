<?php
require_once __DIR__ . '/repository.php';
require_once __DIR__ . '/../models/user.php';

class UserRepository extends Repository
{
    function getByUserName($username){
        try {
            $stmt = $this->connection->prepare("SELECT id, username, password, email, address, role FROM users WHERE username=?");
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
            $stmt = $this->connection->prepare("SELECT id, username, password, email, address, role FROM users WHERE name=? AND password=?");
            $stmt->execute([$user->getUserName(), $user->getPassword()]);

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $user = $stmt->fetch();

            return $user;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function insertUser($user) {
        try {
            $stmt = $this->connection->prepare("INSERT INTO users (username, password, email, address, role) VALUES (?,?,?,?,?)");

            $stmt->execute([$user->getUserName(), $user->getPassword(), $user->getEmail(), $user->getAddress(), $user->getRole()]);

        } catch (PDOException $e) {
            echo $e;
        }
    }

    function updateUser($user) {
        try {
            $stmt = $this->connection->prepare("UPDATE users SET username=?, password=?, email=?, address=?, role=? WHERE id=?");

            $stmt->execute([$user->getUserName(), $user->getPassword(), $user->getEmail(), $user->getAddress(), $user->getRole(), $user->getId()]);

        } catch (PDOException $e) {
            echo $e;
        }
    }

    function deleteUser($id) {
        try {
            $stmt = $this->connection->prepare("DELETE FROM users WHERE id=?");

            $stmt->execute([$id]);

        } catch (PDOException $e) {
            echo $e;
        }
    }
}