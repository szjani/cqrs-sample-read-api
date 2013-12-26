<?php

namespace hu\szjani\sample\finder\user;

class UserDto
{
    private $userId;
    private $email;
    private $version;

    public function __construct($email, $userId, $version)
    {
        $this->email = $email;
        $this->userId = $userId;
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}
