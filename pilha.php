<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    try {
        funcao2();
    } catch (Throwable $problema) {
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getTraceAsString() . PHP_EOL;
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    intdiv(1, 0);
    throw new BadFunctionCallException('Essa é a mensagem de exceção');

    echo 'Saindo da função 2' . PHP_EOL;
}

// Inicia o programa
echo 'Iniciando o programa principal' . PHP_EOL;

// Em seguida inicia a função 1
funcao1();

// Após terminar a função 1, inicia a função 2 e por fim avisa que terminou.
echo 'Finalizando o programa principal' . PHP_EOL;
