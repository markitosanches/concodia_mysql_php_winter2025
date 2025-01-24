<?php
function message($f_name, $f_address, $f_number, $f_city){
    if($f_city == 1){
        $s_city = "Montreal";
    }elseif($f_city == 2){
        $s_city = "Quebec";
    }elseif($f_city == 3){
        $s_city = "Laval";
    }else{
        $s_city = null;
    }

    $msg="<strong>Hello ".$f_name."!</strong><p> Your address is: ".$f_number.", ".$f_address.", ".$s_city."</p>";

    return $msg;
}
?>