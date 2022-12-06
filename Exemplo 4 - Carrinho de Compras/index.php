<?php

require_once __DIR__ . '/MaiorPrecoTest.php';

echo "Hello, World!\n";
$teste = new MaiorPrecoTest();
echo $teste->testDeveRetornarZeroSeCarrinhoVazio() . "\n";
echo $teste->testDeveRetornarValorDoItemSeCarrinhoCom1Elemento() . "\n";
echo $teste->testDeveRetornarMaiorValorSeCarrinhoComMuitosElementos() . "\n";
