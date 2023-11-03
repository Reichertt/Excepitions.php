<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vitor Reichert Goncalves',
        // Necessario informar o endereço de maneira correta com 4 argumentos como em "endereco.php"
        new Endereco('Cidade', 'bairro', 'rua', 'numero')
    )
);

// Verifica se o valor depositado é positivo
try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo, seu ráquer perigoso";
}
