<?php
class newUser
{
    public string $login;
    public string $password;
    public string $email;

    public function __construct(string $login, string $password, string $email)
    {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
    }

    public function getLogin():string
    {
        return $this-> login;
    }

    public function getPassword():string
    {
        return $this-> password;
    }

    public function getEmail():string
    {
        return $this->email;
    }
}
?>