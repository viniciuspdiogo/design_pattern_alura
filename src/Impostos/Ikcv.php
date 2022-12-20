<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Ikcv extends ImpostoComDuasAliquotas
{
    /**
     * @param Orcamento $orcamento
     * @return bool
     */
    protected function deveApplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
    }

    /**
     * @param Orcamento $orcamento
     * @return float
     */
    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    /**
     * @param Orcamento $orcamento
     * @return float
     */
    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}
