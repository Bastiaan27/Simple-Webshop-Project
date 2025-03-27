<?php 
require_once __DIR__ . '/model.php';
require_once __DIR__ . '/role.php';

class User extends Model{
    private int $id;
    private string $username;
    private string $password;
    private string $email;
    private string $address;
    private Role $role;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getUserName(): string
    {
        return $this->username;
    }

    public function setUserName(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getRole(): Role
    {
        return $this->role;
    }

    // if it receives a string convert it to the Role enum
    public function setRole($role): self
    {
        if (is_string($role)) {
            $this->role = Role::from($role);
        } else {
            $this->role = $role;
        }

        return $this;
    }
}