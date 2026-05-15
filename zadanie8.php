<?php
    $X = 10;
    $Y = 5;
    $Z = 1;

    $suma = 0;

    for($i=0; $i<$Y; $i++){
        $suma += max(0, $X - $i*$Z);
    }

    echo $suma;
?>