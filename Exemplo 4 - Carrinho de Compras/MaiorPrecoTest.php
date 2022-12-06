<?php

require_once __DIR__ . '/TestCase.php';
require_once __DIR__ . '/CarrinhoDeCompras.php';
require_once __DIR__ . '/MaiorPreco.php';
require_once __DIR__ . '/Produto.php';


class MaiorPrecoTest extends TestCase
{
    public function testDeveRetornarZeroSeCarrinhoVazio()
    {
        $carrinho = new CarrinhoDeCompras();
        $algoritmo = new MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);
        return $this->assertEquals(0, $valor, "testDeveRetornarZeroSeCarrinhoVazio");
    }
    
    public function testDeveRetornarValorDoItemSeCarrinhoCom1Elemento()
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto("Geladeira", 1, 900.00));
        $algoritmo = new MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);
        return $this->assertEquals(900.00, $valor, "testDeveRetornarValorDoItemSeCarrinhoCom1Elemento");
    }

    public function testDeveRetornarMaiorValorSeCarrinhoComMuitosElementos()
    {
        $carrinho = new CarrinhoDeCompras();
        
        $carrinho->adiciona(new Produto("Geladeira", 1, 900.00));
        $carrinho->adiciona(new Produto("Fogão", 1, 1500.00));
        $carrinho->adiciona(new Produto("Máquina de lavar", 1, 750.00));

        $algoritmo = new MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);
        return $this->assertEquals(1500.00, $valor, "testDeveRetornarMaiorValorSeCarrinhoComMuitosElementos");
    }
}