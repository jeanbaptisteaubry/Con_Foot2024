<?php
namespace App\class;
use DateTime;
use Exception;

class Humain
{
    // D'abord les propriétés
        // Les private
    private string $nom;
    private string $prenom;
    private datetime $dateNaissance;

        // Les public

    // Le constructeur
    public function __construct(string $nom, string $prenom, datetime $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    // Les fonctions // Les méthodes
    // On commence pour les getters et les setters
    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        if($nom != "")
            $this->nom = $nom;
        else
            throw new Exception("Le nom ne peut pas être vide");

    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        if($prenom != "")
            $this->prenom = $prenom;
        else
            throw new Exception("Le prénom ne peut pas être vide");

    }

    public function getDateNaissance(): datetime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(datetime $dateNaissance): void
    {
        if($dateNaissance < new datetime("now"))
            $this->dateNaissance = $dateNaissance;
        else
            throw new Exception("La date de naissance ne peut pas être dans le futur");
        $this->dateNaissance = $dateNaissance;
    }

    //Les autres fonctions ! Celles liées à l'objectif de la classe
    public function donneTexte() : string
    {
        return "Prénom : " . $this->prenom . " Nom : " . $this->nom . " Date de naissance " . $this->dateNaissance->format("d/m/Y");
    }
}

