<?php

require_once __DIR__ . '/CalculadoraDeSalarioTest.php';

$teste = new CalculadoraDeSalarioTest();

$teste->testCalculoSalarioDesenvolvedoresComSalarioAbaixoDoLimite();
$teste->testCalculoSalarioDesenvolvedoresComSalarioAcimaDoLimite();
$teste->testCalculoSalarioDbaComSalarioAbaixoDoLimite();
$teste->testCalculoSalarioDbaComSalarioAcimaDoLimite();
$teste->testCalculoSalarioTestadorComSalarioAbaixoDoLimite();
$teste->testCalculoSalarioTestadorComSalarioAcimaDoLimite();

echo PHP_EOL;