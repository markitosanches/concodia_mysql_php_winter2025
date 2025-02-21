<?php
require_once('classes/Shape.php');

class Rectangle implements Shape{

    private float $width;
    private float $height;

    public function __construct(float $width, float $height){
      $this->width = $width;
      $this->height = $height;
    }
     public function calcArea(){
       return $this->width * $this->height;
     }
}