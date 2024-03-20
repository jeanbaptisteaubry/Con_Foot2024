<?php

class fille extends mere
{
    public function __construct($a, $b, $c)
    {
     //   parent::__construct($a, $b, $c);
        $this->champA = $a; // erreur car champA est privé
        $this->champB = $b; // possible car champB est protégé
        $this->champC = $c; // possible car champC est public
    }
}