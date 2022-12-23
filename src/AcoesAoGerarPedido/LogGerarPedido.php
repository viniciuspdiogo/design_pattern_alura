<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class LogGerarPedido implements AcaoApoGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando Log de pedido";
    }
}