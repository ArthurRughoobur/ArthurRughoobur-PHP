<?php

namespace TP02;

abstract class Personnage
{
private string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }
    public function __toString() : string {
        return $this->nom;
    }




    public abstract function blessure(float $blessure);
}