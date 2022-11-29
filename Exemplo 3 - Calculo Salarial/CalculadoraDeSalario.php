<?php

require_once __DIR__ . '/Funcionario.php';
require_once __DIR__ . '/TabelaCargos.php';

Class CalculadoraDeSalario{
    private $regras = [
        TabelaCargos::DESENVOLVEDOR => [
            'valor' => 3000,
            'maior' => 0.8,
            'menor' => 0.9,
        ],

        TabelaCargos::DBA => [
            'valor' => 2500,
            'maior' => 0.75,
            'menor' => 0.85,
        ],

        TabelaCargos::TESTADOR => [
            'valor' => 2500,
            'maior' => 0.75,
            'menor' => 0.85,
        ],
    ];
    
    public function calculaSalario(Funcionario $funcionario){
        $regra = $this->regras[$funcionario->getCargo()];
        $percentual = $funcionario->getSalario() > $regra['valor'] ? $regra['maior'] : $regra['menor'];

        return $funcionario->getSalario() * $percentual;
    }
}