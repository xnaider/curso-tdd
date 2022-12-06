<?php

require_once __DIR__ . '/CarrinhoDeCompras.php';

class MaiorPreco
{
    public function encontra(CarrinhoDeCompras $carrinho)
    {
        if ( count($carrinho->getProdutos()) === 0 ) {
           return 0;
        }
        $maiorValor = $carrinho->getProdutos()[0]->getValorTotal();
        foreach($carrinho->getProdutos() as $produto) {
            if ( $maiorValor < $produto->getValorTotal() ) {
                 $maiorValor = $produto->getValorTotal();
            }
        }
        return $maiorValor;

    }
}
