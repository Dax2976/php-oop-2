<?php

include __DIR__ . 'Models/CreditCard.php';


class User{
    public $name;
    public $lastname;
    public $age;
    public $creditcard=[];
    public $email;


        function __construct($name,$lastname,$age,$creditcard,$email){
            $this-> name = $name;
            $this-> lastname=$lastname;
            $this-> age = $age;
            $this-> creditcard [] = $creditcard;
            $this-> email = $email;
            
        }
}

class Discount extends User{
    protected $password = true;
    protected $sconto = true;

    function __construct($name,$lastname,$age,$creditcard,$password,$email){
        parent::__construct($name,$lastname,$age,$creditcard,$email);
        $this-> password = $password;
    }

    public function getSconto(){
        if($this->password === true){
             return $this-> sconto = '20%';
        } else{
             'Subscribe to receive a discount code 📮';
        }
    }

    public function Setpassword($password)
    {
        $this->password = $password;
    }


    public function getPassword(){
        return $this-> $password;
    }
}