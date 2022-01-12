<?php

class User
{
    protected  string $name;
    protected  string $email;
    public int $role;
    public function __construct($name,$email,$role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;

    }

    
    public function getName(): string
    {
        return $this->name;
    }

    
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    
    public function getEmail(): string
    {
        return $this->email;
    }

    
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    
    public function getRole(): int
    {
        return $this->role;
    }

    
    public function setRole(int $role): void
    {
        $this->role = $role;
    }

    public function getInfo()
    {
        return "Tên người dùng là: ".$this->getName()." Email là: ".$this->getEmail()." Role là: ".$this->getRole();
    }

    public function isAdmin()
    {
        if($this->getRole() == 1){
            echo "là Admin";
        }
        elseif ($this->getRole() == 2 ){
            echo "là người dùng bình thường ";
        }

    }
}