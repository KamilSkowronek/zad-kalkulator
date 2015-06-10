<?php

namespace Konradha9\Tools;

class Polekwadratu
{

    private $a;

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

   

    public function getA()
    {
        return $this->a;
    }
    
    public function polekwadratu()
    {
        return $this->a * $this->a;
    }
}
