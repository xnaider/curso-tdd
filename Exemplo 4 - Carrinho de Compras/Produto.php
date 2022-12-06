<?php

class Produto
{
    private $nome;
    private $valorUnitario;
    private $quantidade;

    public function __construct($nome, $valorUnitario,  $quantidade = 1)
    {
        $this->nome          = $nome;
        $this->valorUnitario = $valorUnitario;
        $this->quantidade    = $quantidade;
    }
    function getNome()
    {
       return $this->nome;
    }
    function getValorUnitario()
    {
       return $this->valorUnitario;
    }
    function getQuantidade()
    {
       return $this->quantidade;
    }
    public function getValorTotal()
    {
       return $this->valorUnitario * $this->quantidade;
    }

}
