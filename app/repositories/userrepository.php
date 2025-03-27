<?php
require_once __DIR__ . '/repository.php';
require_once __DIR__ . '/../models/user.php';
require_once __DIR__ . '/../models/role.php';

class UserRepository extends Repository
{
    function getByUserName($username) {
        try {
            $stmt = $this->connection->prepare("SELECT id, username, password, email, address, role FROM users WHERE username=?");
            $stmt->execute([$username]);
            
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $userData = $stmt->fetch();
            
            if ($userData) {
                // Create a new User instance
                $user = new User();
                $user->setId($userData['id'])
                     ->setUserName($userData['username'])
                     ->setPassword($userData['password'])
                     ->setEmail($userData['email'])
                     ->setAddress($userData['address']);
                
                // Convert the string role to the Role enum
                $role = Role::from($userData['role']); // 'user' or 'admin'
                $user->setRole($role);
            }
            
            return $user ?? null; // If no user was found, return null
        } catch (PDOException $e) {
            echo $e;
        }
    }
    

    function insertUser($user) {
        try {
            $stmt = $this->connection->prepare("INSERT INTO users (username, password, email, address, role) VALUES (?,?,?,?,?)");

            $stmt->execute([$user->getUserName(), $user->getPassword(), $user->getEmail(), $user->getAddress(), $user->getRole()->value]);

        } catch (PDOException $e) {
            echo $e;
        }
    }

    function updateUser($user) {
        try {
            $stmt = $this->connection->prepare("UPDATE users SET username=?, password=?, email=?, address=?, role=? WHERE id=?");

            $stmt->execute([$user->getUserName(), $user->getPassword(), $user->getEmail(), $user->getAddress(), $user->getRole()->value, $user->getId()]);

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