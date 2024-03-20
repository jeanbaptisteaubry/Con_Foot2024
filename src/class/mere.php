<?php

class mere
{
    private $champA;
    protected $champB;
    public $champC;

    public function __construct($a, $b, $c)
    {
        $this->champA = $a;
        $this->champB = $b;
        $this->champC = $c;
    }

}