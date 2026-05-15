<?php
    $suma = 0;
    $x = 5;

    for($i=0; $i<100; $i++){
        $suma += $x;
        $x += 10;
    }

    echo $suma;
?>