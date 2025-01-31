<?php

abstract class Person{
    public string $name;
    public string $address;
    protected string $phone;
    public string $country;
    private string $language;


    public function setName($name){
        $this->name = $name;
    }

    public function setPhone($phone){
        $this->phone = $phone;
    }

    final public function getMessage(){
        return "The name is $this->name";
    }

    abstract function getName();
}