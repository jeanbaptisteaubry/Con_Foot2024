<?php
namespace App\class;
class Arbitre extends Humain
{
    private string $pays;

    public function __construct(string $nom, string $prenom, \DateTime $dateNaissance, string $pays)
    {
        //Appel du constructeur de la classe mère
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->pays = $pays;
    }

    public function getPays(): string
    {
        return $this->pays;
    }

    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    public function donneTexte(): string
    {
        return parent::donneTexte() . " Pays : " . $this->pays;
    }
}