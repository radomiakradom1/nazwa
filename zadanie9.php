<?php
    $K = 2;
    $cegly = 0;

    for($i=0; $i<$Y; $i++){
        $cegly += max(0, $X - $i*$Z);
    }

    echo $cegly * $K;
?>