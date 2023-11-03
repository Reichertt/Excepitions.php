<?php

class MinhaExcecao extends DomainException
{
    public function exibeMeuNome()
    {
        echo "Vitor Reichert Goncalves";
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->exibeMeuNome();
}
