<?php

use \Alura\DesignPattern\{
    CalculadoraDeImpostos,
    CalculadoraDeDescontos,
    Orcamento
};
use \Alura\DesignPattern\Impostos\{
    Icms,
    Iss
};

require 'vendor/autoload.php';


//$calculadora = new CalculadoraDeImpostos();
//
//$orcamento = new Orcamento();
//$orcamento->valor = 100;
//
//echo $calculadora->calcula($orcamento,new Iss());

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

echo $calculadora->calculaDescontos($orcamento);