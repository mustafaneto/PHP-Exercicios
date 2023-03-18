<?php

function dataPorExtenso(&$data) {
    $partes = explode('/', $data);
    $dia = $partes[0];
    $mes = $partes[1];
    $ano = $partes[2];

    switch ($mes) {
        case '01':
            $mes = 'Janeiro';
            break;
        case '02':
            $mes = 'Fevereiro';
            break;
        case '03':
            $mes = 'Março';
            break;
        case '04':
            $mes = 'Abril';
            break;
        case '05':
            $mes = 'Maio';
            break;
        case '06':
            $mes = 'Junho';
            break;
        case '07':
            $mes = 'Julho';
            break;
        case '08':
            $mes = 'Agosto';
            break;
        case '09':
            $mes = 'Setembro';
            break;
        case '10':
            $mes = 'Outubro';
            break;
        case '11':
            $mes = 'Novembro';
            break;
        case '12':
            $mes = 'Dezembro';
            break;
    }
        echo $dia, ' de ', $mes, ' de ', $ano, PHP_EOL;
    
}

function dataPorExtenso1(&$data) {
    $partes = explode('/', $data);
    $meses = [ 1 => 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 
    'Outubro', 'Novembro', 'Dezembro'];

    $mes = (int) $partes[1];

    return $partes[0] . ' de ' . $meses[$mes] . ' de ' . $partes[2] . PHP_EOL;
}

    $data = readline('Informe uma data (dd/mm/aaaa): ' );
    echo dataPorExtenso1($data);

?>