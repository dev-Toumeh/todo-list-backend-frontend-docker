<?php

namespace Application\Model;

use ArrayObject;

class User extends ArrayObject
{
    protected $id;

    protected $username;

    protected $password;

    public function exchangeArray($row): void
    {
        $this->id = !empty($row['id']) ? $row['id'] : null;
        $this->username = !empty($row['username']) ? $row['username'] : null;
        $this->password = !empty($row['password']) ? $row['password'] : null;
    }

    public function getId(): string
    {
        return $this->id;

    }

    public function getUsername()
    {
        return $this->username;

    }

    public function getPassword()
    {
        return $this->password;

    }
}