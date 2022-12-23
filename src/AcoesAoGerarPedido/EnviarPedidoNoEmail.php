<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class EnviarPedidoNoEmail implements AcaoApoGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Enviando Email de pedido gerado";
    }
}