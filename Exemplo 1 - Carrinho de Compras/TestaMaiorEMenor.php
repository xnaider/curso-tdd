<?php

require_once __DIR__ . '/CarrinhoDeCompras.php';
require_once __DIR__ . '/Produto.php';

class TestaMaiorEMenor
{
    public function realizaTesteVariado(){
        $carrinho = new CarrinhoDeCompras ();
        $carrinho->adiciona( new Produto ("Liquidificador", 250.00));
        $carrinho->adiciona( new Produto ("Geladeira", 450.00));
        $carrinho->adiciona( new Produto("Jogo de pratos", 70.00));
        $maiorEMenor = new MaiorEMenor ();
        $maiorEMenor->encontra($carrinho);
        echo "O menor produto:";
        echo $maiorEMenor->getMenor()->getNome() . PHP_EOL;
        echo "O maior produto:";
        echo $maiorEMenor->getMaior()->getNome() . PHP_EOL;
        $testeMaiorEMenor = new TestaMaiorEMenor ();
    }

    public function realizaTesteCrescente(){
        $carrinho = new CarrinhoDeCompras ();
        $carrinho->adiciona( new Produto ("Liquidificador", 250.00));
        $carrinho->adiciona( new Produto ("Geladeira", 450.00));
        $carrinho->adiciona( new Produto("Jogo de pratos", 70.00));
        $maiorEMenor = new MaiorEMenor ();
        $maiorEMenor->encontra($carrinho);
        echo "O menor produto:";
        echo $maiorEMenor->getMenor()->getNome() . PHP_EOL;
        echo "O maior produto:";
        echo $maiorEMenor->getMaior()->getNome() . PHP_EOL;
        $testeMaiorEMenor = new TestaMaiorEMenor ();
    }

    public function realizaTesteDecrescente(){
        $carrinho = new CarrinhoDeCompras ();
        $carrinho->adiciona( new Produto ("Liquidificador", 250.00));
        $carrinho->adiciona( new Produto ("Geladeira", 450.00));
        $carrinho->adiciona( new Produto("Jogo de pratos", 70.00));
        $maiorEMenor = new MaiorEMenor ();
        $maiorEMenor->encontra($carrinho);
        echo "O menor produto:";
        echo $maiorEMenor->getMenor()->getNome() . PHP_EOL;
        echo "O maior produto:";
        echo $maiorEMenor->getMaior()->getNome() . PHP_EOL;
    }
}