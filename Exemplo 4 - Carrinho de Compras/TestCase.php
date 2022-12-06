<?php

class TestCase 
{
    public function assertEquals($valorEsperado, $valorAvaliado, $teste) {

        if ($valorEsperado == $valorAvaliado)
        return $teste ." teste Ok\n" ;
        return $teste ." teste Errado\n";
    }
  
}


