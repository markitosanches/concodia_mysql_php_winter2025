<?php

class Person{
    private string $name;
    private string $address;
    private string $zipCode;
    private string $phone;
    private string $email;

    public function setName(string $name):void{
        $this->name = $name;
    }

    public function setPhone(string $phone):void{
        $this->phone = $phone;
    }

    public function getName():string{
        return $this->name;
    }

    public function getPhone():string{
        return $this->phone;
    }
}
?>