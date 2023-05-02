<?php

function fibonacci($numero) {
    $a = 0;
    $b = 1;
    while ($numero > 0) {
        $c = $a + $b;
        echo $b . ' , ' ;

        $a = $b;
        $b = $c;
        $numero = $numero - 1;
    }
}

$numero = rand(1, 20);

fibonacci($numero);





?>