<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\ContaCorrente; // Assuming you have a concrete class like ContaCorrente

// Espera 4 argumentos vindos de "enderecos.php"
$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');

// Variavel informando um titular e CPF
$vitor = new Titular(new CPF('123.456.789-10'), 'Vitor Reichert Goncalves', $endereco);

// Utilizada a variavel "$vitor" para as informações de conta
try {
    $primeiraConta = new ContaCorrente($vitor);

    // Realiza o deposito
    $primeiraConta->deposita(500);

    // Realiza o saque
    $primeiraConta->saca(300);

    echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
    echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
    echo $primeiraConta->recuperaSaldo() . PHP_EOL;

} catch (Error $e) {
    echo "Erro pego: " . $e->getMessage();
}

// Variavel informando um titular e CPF
$patricia = new Titular(new CPF('698.549.548-11'), 'Patricia', $endereco);

// Utilizada a variavel "$patricia" para as informações de conta
$segundaConta = new ContaCorrente($patricia);

// Espera 4 argumentos vindos de "enderecos.php"
$outroEndereco = new Endereco('A', 'b', 'c', '1D');

// Variavel informando um titular e CPF
$outra = new ContaCorrente(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));

echo ContaCorrente::recuperaNumeroDeContas();
