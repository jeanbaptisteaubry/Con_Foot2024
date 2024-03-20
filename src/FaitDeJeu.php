<?php

use App\class\Joueur;

class FaitDeJeu extends Evenement
{
    private Joueur $auteur;
    private string $description;

    public function __construct(DateTime $temps, Joueur $auteur, string $description)
    {
        parent::__construct($temps);
        $this->auteur = $auteur;
        $this->description = $description;
    }

    public function getAuteur(): Joueur
    {
        return $this->auteur;
    }

    public function donneTexte() :string
    {
        return $this->getTemps() . " : " . $this->auteur->donneTexte() . " - " . $this->description;
    }

}