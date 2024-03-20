<?php

use App\class\Joueur;

class Substitution extends Evenement
{
    private Joueur $entrant;
    private Joueur $sortant;

    public function __construct(DateTime $temps, Joueur $entrant, Joueur $sortant)
    {
        parent::__construct($temps);

        $this->sortant = $sortant;
        $this->entrant = $entrant;

        //$entrant == $sortant, Doit être différent !
        if($entrant == $sortant)
            throw new Exception("Les 2 joueurs sont les mêmes !");

        //Les 2 joueurs ne sont pas de la même équipe !
        if($entrant->getEquipe() != $sortant->getEquipe())
            throw new Exception("Les 2 joueurs ne sont pas de la même équipe !");

        //pas possible : $entrant || $sortant, ne devrait pas être nul

    }

    public function donneTexte() : string
    {
        return $this->getTemps() . " : " . "Entrant : " . $this->entrant->donneTexte() . " Sortant : " . $this->sortant->donneTexte();
    }

}