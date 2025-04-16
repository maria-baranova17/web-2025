<?php

    $num = $_GET['number'];

    $array = array(
        "0" => "zero",
        "1" => "one",
        "2" => "two",
        "3" => "tree",
        "4" => "four",
        "5" => "five",
        "6" => "six",
        "7" => "seven",
        "8" => "eight",
        "9" => "nine",
    );

    if (($num >= 0) && ($num <= 9))
    {
        echo $array[$num];
    }
    else 
    {
        echo 'Incorrect input';
    }
    
?>