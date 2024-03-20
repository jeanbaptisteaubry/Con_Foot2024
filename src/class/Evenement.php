<?php

class Evenement
{
    private DateTime $temps;

    public function __construct(DateTime $temps)
    {
        $this->temps = $temps;
    }

    public function getTemps() : DateTime
    {
        return $this->temps;
    }
}