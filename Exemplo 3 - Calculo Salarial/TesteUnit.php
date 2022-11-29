<?php

class TestUnit 
{
    public function assertEquals($valorEsperado, $valorAvaliado, $teste) {
        echo PHP_EOL;
        
        if ($valorEsperado == $valorAvaliado)
            return $teste ." teste Ok";
        return $teste ." teste Errado";
    }  
}