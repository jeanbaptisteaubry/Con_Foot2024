<?php
namespace App\class;
class Equipe
{
    private string $pays;

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




}