<?php

function fatorial($numero) {
    $somaFatorial = 1;
    while ($numero > 1) {
        $somaFatorial *= $numero; 
        $numero--;
    }
    return $somaFatorial;
}

for ($i = 1; ($i <= 30); $i++) {
    echo $i . ' - ' . fatorial($i) . PHP_EOL;
}

?>