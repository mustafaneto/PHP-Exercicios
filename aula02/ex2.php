<?php

$nomes = [];

do {
    echo 'Menu:', PHP_EOL, 
         '1 - Incluir nome', PHP_EOL,
         '2 - Remover nome', PHP_EOL,
         '3 - Listar nomes', PHP_EOL,
         '4 - Sair', PHP_EOL;
    
    $resposta = readline();

    if ($resposta == 1) {
        $nome = readline('Digite um nome: ');
        $nomes []= $nome;
    } else if ($resposta == 2) {
        $nome = readline('Digite um nome para excluir: ');
        $i = array_search($nome, $nomes);
        if ($i === false) {
            echo 'Usuário não encontrado', PHP_EOL;
        } else {
            unset($nomes[$i]);
        }
    } else if ($resposta == 3) {
        foreach($nomes as $chave => $valor) {
            echo $chave, ' = ', $valor, PHP_EOL;
        }
    }
} while ($resposta != 4);



?>