<?php

use App\class\Joueur;

class Faute extends FaitDeJeu
{
    private Joueur $victime;
    private bool $cartonJaune;
    private bool $cartonRouge;

    public function __construct(DateTime $temps, Joueur $auteur, string $description, Joueur $victime, bool $cartonJaune, bool $cartonRouge)
    {
        parent::__construct($temps, $auteur, $description);
        $this->victime = $victime;
        $this->cartonJaune = $cartonJaune;
        $this->cartonRouge = $cartonRouge;
    }

    public function getVictime(): Joueur
    {
        return $this->victime;
    }

    public function getCartonJaune(): bool
    {
        return $this->cartonJaune;
    }

    public function getCartonRouge(): bool
    {
        return $this->cartonRouge;
    }

    public function donneTexte() :string
    {
        return parent::donneTexte() . " - Victime : " . $this->victime->donneTexte() . " - Carton jaune : " . $this->cartonJaune . " - Carton rouge : " . $this->cartonRouge;
    }

}