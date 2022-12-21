<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

abstract class EstadoOrcamento
{
    /**
     * @throws \DomainException
     */

    abstract public function calculaDecontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento)
    {
        throw new \DomainException('Este estado não pode ser aprovado');
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new \DomainException('Este estado não pode ser reprovado');
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new \DomainException('Este estado não pode ser finalizado');
    }
}