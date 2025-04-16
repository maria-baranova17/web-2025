<?php

if (isset($_GET['start']) && isset($_GET['end'])) {
    $start = $_GET['start'];
    $end = $_GET['end'];

    for ($i = (int)$start; $i <= (int)$end; $i++) {
        $ticket = (string)$i;
        $first_half = (int)($ticket[0])+(int)($ticket[1])+(int)($ticket[2]);
        $second_half = (int)($ticket[3])+(int)($ticket[4])+(int)($ticket[5]);

        if ($first_half == $second_half){
            echo $i .'<br>';
        }
    }
}
?>