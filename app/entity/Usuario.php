<?php

namespace cursophp7dc\app\entity;

use cursophp7dc\core\database\IEntity;

class Usuario implements IEntity
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $role;
    /**
     * @var int
     */
    private $numArticulos;


    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Usuario
     */
    public function setUsername(string $username): Usuario
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Usuario
     */
    public function setPassword(string $password): Usuario
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     * @return Usuario
     */
    public function setRole(string $role): Usuario
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumArticulos(): int
    {
        return $this->numArticulos;
    }

    /**
     * @param int $numArticulos
     * @return Usuario
     */
    public function setNumArticulos(int $numArticulos): Usuario
    {
        $this->numArticulos = $numArticulos;
        return $this;
    }


    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'username' => $this->getUsername(),
            'password' => $this->getPassword(),
            'role' => $this->getRole(),
            'numArticulos' => $this->getNumArticulos()
        ];
    }
}