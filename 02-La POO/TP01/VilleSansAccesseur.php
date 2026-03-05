<?php
class VilleSansAccesseur
{
    private string $nomVille;
    private string $nomDepartement;

    private static string $longueurVille = "";

    public function __construct($nomVille, $nomDepartement)
    {
        $this->nomVille = $nomVille;
        $this->nomDepartement = $nomDepartement;
        if (strlen($this->nomVille) > strlen(static::$longueurVille)) {
        static:: $longueurVille = $this->nomVille;
        }

    }

public function afficherVille(): string
{
        return "La ville $this->nomVille est dans le département $this->nomDepartement";
}
public static function villeLaPlusLongue()
{
    echo 'La ville la plus longue est: '.static::$longueurVille;
}
}