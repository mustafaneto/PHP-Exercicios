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

function menu() {
    echo 'Menu:', PHP_EOL, 
    '1 - Cadastrar pessoa', PHP_EOL,
    '2 - Remover pessoa', PHP_EOL,
    '3 - Listar pessoas', PHP_EOL,
    '4 - Sair', PHP_EOL;
}

function inserir(&$array) {
    $nome = readline('Digite um nome: ');
    $idade = readline('Digite a idade: ');
    $p = ['nome' => $nome, 'idade' => $idade];
    $array []= $p;
}

function remover(&$array) {
    $nome = readline('Digite uma pessoa para excluir: ');
        $num = 0;
        foreach($array as $chave => $valor){
            if($valor['nome'] == $nome) {
                unset($array[$chave]);
                $num++;
            } 
        }
        if ($num == 0) {
                echo 'Usuário não encontrado.', PHP_EOL;
        }
}

function listar(&$array) {
    usort($array, "ordenar");
        foreach($array as $chave => $valor) {
            echo $chave, ' => Nome - ', $valor['nome'], PHP_EOL, 
                        '     Idade - ', $valor['idade'], PHP_EOL;
        }
}

do {
    menu();
    $resposta = readline();

    if ($resposta == 1) {
        inserir($pessoas);
    } else if ($resposta == 2) {
        remover($pessoas);
    } else if ($resposta == 3) {
        listar($pessoas);
    }
} while ($resposta != 4);

?>