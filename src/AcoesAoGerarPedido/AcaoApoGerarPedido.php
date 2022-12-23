<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

interface AcaoApoGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}