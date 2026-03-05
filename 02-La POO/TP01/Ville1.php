<?php

class Ville1
{
    private string $nomVille;
    private string $nomDepartement;

    public function getNomVille(): string
    {
        return $this->nomVille;
    }

    public function setNomVille(string $nomVille): void
    {
        $this->nomVille = $nomVille;
    }

    public function getNomDepartement(): string
    {
        return $this->nomDepartement;
    }

    public function setNomDepartement(string $nomDepartement): void
    {
        $this->nomDepartement = $nomDepartement;
    }




function afficherVille():String{
   return "La ville $this->nomVille est dans le département $this->nomDepartement";
}

}
