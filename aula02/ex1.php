<?php

$nomes = [];

do {
    $nome = readline('Digite um nome (vazio para sair): ' );
    $vazio = empty ($nome);
    if (!$vazio) {
        $nomes []= $nome; 
    }
} while ( ! $vazio);

foreach($nomes as $chave => $valor) {
    echo $chave, ' = ', $valor, PHP_EOL;
}


?>