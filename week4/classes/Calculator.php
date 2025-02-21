<?php

class Calculator {
    public static $message = "This is the result";

    public static function add(float $a, float $b):string{
        $r= $a + $b;
        return self::$message." ".$r;
    }
}
