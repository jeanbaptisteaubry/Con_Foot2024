<?php
namespace App\class;
use App\class\Humain;

class Selectionneur extends Humain
{
    private ?Equipe $equipeEntraine;

    public function __construct(string $nom, string $prenom, \DateTime $dateNaissance, Equipe $equipeEntraine)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->equipeEntraine = $equipeEntraine;
        if($this->equipeEntraine != null)
            $this->equipeEntraine->setSelectionneur($this);

    }

    public function getEquipeEntraine(): Equipe
    {
        return $this->equipeEntraine;
    }

    public function setEquipeEntraine(?Equipe $equipeEntraine): void
    {
        if($this->equipeEntraine != null)
            $this->equipeEntraine->setSelectionneur($this);
        $this->equipeEntraine = $equipeEntraine;

    }

}