<?php

    $year = $_GET['year'];
    if (!empty($year))
    {
        if ($year > 0 && $year <= 30000)
        {
            if (($year % 4 == 0 && $year % 100 !== 0) || ($year % 400 == 0))
            {
                echo 'YES';    
            }
            else 
            {
                echo 'NO';
            }
        }
        else 
        {
            echo 'Incorrect input';
        }
    }
    else 
    {
        echo 'empty input';
    }

?>