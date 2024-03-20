<?php

class User{
    public $id; 
    private $age;
    protected string $username;
    protected string $password;

    public function __construct($id, $age, $username){
        $this->id = $id;
        $this->age = $age; //tecka spojuje string, $ odkazuje na instanci 
        $this->name = $username;

    }
    public function getAge(){
        return $this->age;
    }

    public function getName(){
        return $this->username;
    }
    /*
     * @return void
     */
    public function setId(int $id):void{
        $this->id = $id;
    }
    public function getId(){    
        return $this->id;
    }

    public static function bark(){
        echo "BARK";
    }


    public function __toString(){
        return $this->username.":".$this->password;
    }
}