<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco implements AcaoApoGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Salvando no banco de dados";
    }
}