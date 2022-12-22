<?php

use Alura\DesignPattern\GerarPedido;
use Alura\DesignPattern\GerarPedidoHandler;

require_once 'vendor/autoload.php';



$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento,$numeroDeItens,$nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->execute($gerarPedido);
