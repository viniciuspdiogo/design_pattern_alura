<?php

use \Alura\DesignPattern\{
    CalculadoraDeImpostos,
    Orcamento
};
use \Alura\DesignPattern\Impostos\{
    Icms,
    Iss
};

require 'vendor/autoload.php';


$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento,new Iss());