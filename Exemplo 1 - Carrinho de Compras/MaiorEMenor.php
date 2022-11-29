<?php

require_once __DIR__ . '/CarrinhoDeCompras.php';

class MaiorEMenor
{
    private $menor;
    private $maior;

    public function encontra(CarrinhoDeCompras $carrinho){
        foreach ($carrinho->getProdutos() as $produto) {
            if (empty($this->menor) || $produto->getValor() < $this->menor->getValor()) {
                $this->menor = $produto;
            } else if (empty($this->maior) || $produto->getValor() > $this->maior->getValor()) {
                $this->maior = $produto;
            }
        }
    }

    public function getMenor(){
        return $this->menor;
    }

    public function getMaior(){
        return $this->maior;
    }
}
