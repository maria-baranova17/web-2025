<?php

    $date = $_GET['date'];
    echo $date;
    $explode = explode('-', $date);
    $month = $explode[1];
    $day = $explode[2];
    $zodiac_sign = 'unknown';

    if ((($month == 1) && ($day >= 20 && $day <= 31)) || (($month == 2) && ($day >= 1 && $day <= 19))){
        $zodiac_sign = 'Aquarius';
    }
    if ((($month == 2) && ($day >= 20 && $day <= 29)) || (($month == 3) && ($day >= 1 && $day <= 20))){
        $zodiac_sign = 'Pisces';
    }
    if ((($month == 3) && ($day >= 21 && $day <= 31)) || (($month == 4) && ($day >= 1 && $day <= 19))){
        $zodiac_sign = 'Aries';
    }
    if ((($month == 4) && ($day >= 20 && $day <= 30)) || (($month == 5) && ($day >= 1 && $day <= 20))){
        $zodiac_sign = 'Taurus';
    }
    if ((($month == 5) && ($day >= 21 && $day <= 31)) || (($month == 6) && ($day >= 1 && $day <= 20))){
        $zodiac_sign = 'Gemini';
    }
    if ((($month == 6) && ($day >= 21 && $day <= 30)) || (($month == 7) && ($day >= 1 && $day <= 22))){
        $zodiac_sign = 'Cancer';
    }
    if ((($month == 7) && ($day >= 23 && $day <= 30)) || (($month == 8) && ($day >= 1 && $day <= 22))){
        $zodiac_sign = 'Leo';
    }
    if ((($month == 8) && ($day >= 23 && $day <= 31)) || (($month == 9) && ($day >= 1 && $day <= 22))){
        $zodiac_sign = 'Virgo';
    }
    if ((($month == 9) && ($day >= 23 && $day <= 30)) || (($month == 10) && ($day >= 1 && $day <= 23))){
        $zodiac_sign = 'Libra';
    }
    if ((($month == 10) && ($day >= 24 && $day <= 31)) || (($month == 11) && ($day >= 1 && $day <= 22))){
        $zodiac_sign = 'Scorpio';
    }
    if ((($month == 11) && ($day >= 23 && $day <= 30)) || (($month == 12) && ($day >= 1 && $day <= 21))){
        $zodiac_sign = 'Sagittarius';
    }
    if ((($month == 12) && ($day >= 21 && $day <= 31)) || (($month == 01) && ($day >= 1 && $day <= 19))){
        $zodiac_sign = 'Capricorn';
    }
    echo $zodiac_sign;
   
?>
