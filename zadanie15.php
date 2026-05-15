<?php
    $suma = 0;

    for($i=0; $i<10; $i++){
        $x = rand(50,100);
        echo $x." ";
        $suma += $x;
    }

    echo "Suma: ".$suma;
    echo " Średnia: ".($suma/10);
?>