<?php
require_once "Ville1.php";
require_once "VilleSansAccesseur.php";
require_once "Ville1AvecRegion.php";
$rennes = new  Ville1();
$stMalo = new VilleSansAccesseur("Saint-Malo","Ille-et-Vilaine");
$mordelle = new Ville1AvecRegion("Bretagne");
$azertyuiopeeezknze= new VilleSansAccesseur("revrehveriovhernovherziomvneriovernvoierjverivj","Ille-et-Vilaine");


$rennes->setNomVille("Rennes");
$rennes->setNomDepartement("Ille-Et-Vilaine");



$mordelle->setNomDepartement("Ille-et-Vilaine");
$mordelle->setNomVille("Mordelle");


echo $stMalo->afficherVille().'<br>';
echo $rennes->afficherVille().'<br>';
echo $mordelle->afficherRegion().'<br>';

VilleSansAccesseur::villeLaPlusLongue();
