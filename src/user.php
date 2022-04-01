<?php

namespace App;

class user{
    public $id;
    public $name;
    private $email;
    private $pass;

    function __construct($id,$name,$email,$pass){
        $this->id = (int) $id;
        $this->name = (string) $name;
        $this->email= (string) $email;
        $this->pass=(string) $pass;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPass(): string
    {
        return $this->pass;
    }

    public function setPass($newPass) : void{
        $this->pass=$newPass;
    }

    public function timeCreated() : string{
        $date = new \DateTime();
        return $date->format('d-m-Y H:i');
    }
}