<?php

function limparTela() {
    echo "\033[2J\033[;H", PHP_EOL;
}

limpartela();
?>