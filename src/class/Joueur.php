<?php
namespace App\class;
class Joueur extends Humain
{
    private int $numeroMaillot;


    public function __construct(string $nom, string $prenom, \DateTime $dateNaissance, int $numeroMaillot)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->numeroMaillot = $numeroMaillot;
    }

    public function getNumeroMaillot(): int
    {
        return $this->numeroMaillot;
    }

    public function donneTexte(): string
    {
        return parent::donneTexte() . " Numéro de maillot : " . $this->numeroMaillot;
    }
}