<?php
namespace App\class;
class Equipe
{
    private string $pays;
    private $listeJoueurs = [];

    private ?Selectionneur $selectionneur;
    public function __construct(string $pays)
    {
        $this->pays = $pays;
    }

    public function getPays(): string
    {
        return $this->pays;
    }

    public function setSelectionneur(Selectionneur $selectionneur): void
    {
        if($this->selectionneur != null && $this->selectionneur != $selectionneur)
            $this->selectionneur->setEquipeEntraine(null);
        $this->selectionneur = $selectionneur;
    }

    public function ajouterJoueur(Joueur $joueur): void
    {
        if(!in_array($joueur, $this->listeJoueurs)) {
            $this->listeJoueurs[] = $joueur;
            $joueur->setEquipe($this);
        }
    }

    public function retirerJoueur(Joueur $joueur): void
    {
        if(in_array($joueur, $this->listeJoueurs)) {
            $this->listeJoueurs = array_diff($this->listeJoueurs, [$joueur]);
            if($joueur->getEquipe() == $this)
                $joueur->setEquipe(null);
        }
    }

    public function getListJoueurs(): array
    {
        return $this->listeJoueurs;
    }


}