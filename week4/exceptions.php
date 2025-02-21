<?php

function divide($dividend, $divisor){
    if($divisor == 0){
        throw new Exception("Cannot divide by zero", 407);
    }
    return $dividend / $divisor;
}

try{
    echo divide(10, 0);
}catch (Exception $e){
    echo "<pre>";
    var_dump($e);
    echo "</pre>";

    echo "<br>";
    echo $e->getMessage();
    echo "<br>";
    echo $e->getCode();
    echo "<br>";
    echo $e->getFile();
    echo "<br>";
    echo $e->getLine();
}
?>