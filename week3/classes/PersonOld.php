<?php

class Person{
    private string $name;
    public string $address;
    public string $zipCode = "X1X1C1";
    public string $phone;
    public string $email;
    public int $age;
    //float
    //boolean

    public function __construct(string $name, string $address="", string $zipCode = ""){
        $this->name = $name;
        $this->address = $address;
        $this->zipCode = $zipCode;
    }

    // public function setProps(string $name, string $address="", string $zipCode = ""): void{
    //     $this->name = $name;
    //     $this->address = $address;
    //     $this->zipCode = $zipCode;
    // }

    public function getMessage(): string{
        return "Hello my name is $this->name and i live at: $this->address";
    }

    // function __destruct(){
    //     echo "Hello my name is $this->name and i live at: $this->address";
    // }

}

?>