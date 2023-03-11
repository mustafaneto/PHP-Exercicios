<?php

$pessoas = [];

function ordenar($a1,$a2) {
    if($a1['nome'] == $a2['nome']) {
        return 0;
    } else if ($a1['nome'] > $a2['nome']){
        return 1;
    } else {
        return -1;
    }
}

do {
    echo 'Menu:', PHP_EOL, 
         '1 - Cadastrar pessoa', PHP_EOL,
         '2 - Remover pessoa', PHP_EOL,
         '3 - Listar pessoas', PHP_EOL,
         '4 - Sair', PHP_EOL;
    
    $resposta = readline();

    if ($resposta == 1) {
        $nome = readline('Digite um nome: ');
        $idade = readline('Digite a idade: ');
        $p = ['nome' => $nome, 'idade' => $idade];
        $pessoas []= $p;
    } else if ($resposta == 2) {
        $nome = readline('Digite uma pessoa para excluir: ');
        $indice = -1;
        foreach($pessoas as $chave => $valor){
            if($valor['nome'] == $nome) {
                $indice = $chave;
                break;
            } 
        }
        if ($indice > -1) {
            unset($pessoas[$indice]);
        } else {
            echo 'Usuário não encontrado.', PHP_EOL;
        }
    } else if ($resposta == 3) {
        usort($pessoas, "ordenar");
        foreach($pessoas as $chave => $valor) {
            echo $chave, ' => Nome - ', $valor['nome'], PHP_EOL, 
                        '     Idade - ', $valor['idade'], PHP_EOL;
        }
    }
} while ($resposta != 4);



?>