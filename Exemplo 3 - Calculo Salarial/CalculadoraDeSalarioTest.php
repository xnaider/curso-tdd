<?php

require_once __DIR__ . '/CalculadoraDeSalario.php';
require_once __DIR__ . '/Funcionario.php';
require_once __DIR__ . '/TabelaCargos.php';
require_once __DIR__ . '/TesteUnit.php';

class CalculadoraDeSalarioTest extends TestUnit
{
    public function testCalculoSalarioDesenvolvedoresComSalarioAbaixoDoLimite()
    {
        $calculadora   = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("Daniel", 1500.0, TabelaCargos::DESENVOLVEDOR);
        $salario       = $calculadora->calculaSalario($desenvolvedor);

        echo $this->assertEquals(1500.0 * 0.9, $salario, null);
    }

    public function testCalculoSalarioDesenvolvedoresComSalarioAcimaDoLimite()
    {
        $calculadora   = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("Daniel", 3500.0, TabelaCargos::DESENVOLVEDOR);
        $salario       = $calculadora->calculaSalario($desenvolvedor);

        echo $this->assertEquals(3500.0 * 0.8, $salario, null);
    }

    public function testCalculoSalarioDbaComSalarioAbaixoDoLimite()
    {
        $calculadora   = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("Daniel", 1500.0, TabelaCargos::DBA);
        $salario       = $calculadora->calculaSalario($desenvolvedor);

        echo $this->assertEquals(1500.0 * 0.85, $salario, null);
    }

    public function testCalculoSalarioDbaComSalarioAcimaDoLimite()
    {
        $calculadora   = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("Daniel", 3500.0, TabelaCargos::DBA);
        $salario       = $calculadora->calculaSalario($desenvolvedor);

        echo $this->assertEquals(3500.0 * 0.75, $salario, null);
    }

    public function testCalculoSalarioTestadorComSalarioAbaixoDoLimite()
    {
        $calculadora   = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("Daniel", 1500.0, TabelaCargos::TESTADOR);
        $salario       = $calculadora->calculaSalario($desenvolvedor);

        echo $this->assertEquals(1500.0 * 0.85, $salario, null);
    }

    public function testCalculoSalarioTestadorComSalarioAcimaDoLimite()
    {
        $calculadora   = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("Daniel", 3500.0, TabelaCargos::TESTADOR);
        $salario       = $calculadora->calculaSalario($desenvolvedor);

        echo $this->assertEquals(3500.0 * 0.75, $salario, null);
    }
}

