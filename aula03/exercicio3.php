<?php

function formataTelefone(&$numero) {
    $digitos = mb_strlen($numero);
    
    if (!is_numeric($numero)) {
        return $numero;
    } 
    else {
        if ($digitos == 8) {
            return mb_substr($numero, 0, 4) . ' ' . mb_substr($numero, 4);
        }
        else if ($digitos == 10) {
            return '(' . mb_substr($numero, 0, 2) . ') ' . 
            mb_substr($numero, 2, 4) . '-' . mb_substr($numero, 6);
        }
        else if ($digitos == 11 && ((mb_substr($numero, 0, 4) != '0800') && (mb_substr($numero, 0, 4) != '0300'))) {
            return '(' . mb_substr($numero, 0, 2) . ') ' . 
            mb_substr($numero, 2,1) . '-' . mb_substr($numero, 3, 4) . '-' . mb_substr($numero, 7);
        }
        else if ($digitos == 11 && ((mb_substr($numero, 0, 4) == '0800') || (mb_substr($numero, 0, 4) == '0300'))) {
            return mb_substr($numero, 0, 4) . ' ' . mb_substr($numero, 4,3) . ' ' . mb_substr($numero, 7); 
        }
    }
    
}

function fomataArrayTelefone(array &$telefones) {
    foreach($telefones as &$telefone) {
        $telefone = formataTelefone($telefone); 
    }
}

$telefones = ['30044000', '2225271727', '22987654321', '08007024000'];
fomataArrayTelefone($telefones);
foreach($telefones as $t) {
    echo $t, PHP_EOL;
}

?>