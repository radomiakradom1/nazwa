<?php
    $X = 12;
    $Y = 100;

    $kwota = 0;

    for($i=1; $i<=$X; $i++){
        $kwota += $Y;
        $kwota *= 1.08;
    }

    echo $kwota;
?>