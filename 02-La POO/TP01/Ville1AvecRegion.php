<?php

class Ville1AvecRegion extends Ville1
{
private string $region;


    public function __construct(string $region)
    {
        $this->region = $region;

    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function setRegion(string $region): void
    {
        $this->region = $region;
    }



    public function afficherRegion(): string {
        return 'La ville '.$this->getNomVille() .'est dans la région '.$this->region .'et est dans le département '.$this->getNomDepartement();
    }
}