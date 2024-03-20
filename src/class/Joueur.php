<?php
namespace App\class;
class Joueur extends Humain
{
    private int $numeroMaillot;
    private Equipe $jouePour;

    public function __construct(string $nom, string $prenom, \DateTime $dateNaissance, int $numeroMaillot, Equipe $equipe)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->numeroMaillot = $numeroMaillot;
        $this->jouePour = $equipe;
        $equipe->ajouterJoueur($this);
    }

    public function setEquipe(Equipe $equipe): void
    {
        if($this->jouePour != $equipe)
        {
            $memoEquipe = $this->jouePour;
            $this->jouePour = $equipe;
            if($memoEquipe != null )
                $memoEquipe->retirerJoueur($this);

            if($equipe != null)
               $equipe->ajouterJoueur($this);
        }
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