<?php

namespace Alura\DesignPattern;

class GerarPedidoHandler
{
    public function __construct()
    {
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;


        echo "Cria pedido no banco de dados" . PHP_EOL;
        echo "Envia Email para cliente" . PHP_EOL;
    }
}