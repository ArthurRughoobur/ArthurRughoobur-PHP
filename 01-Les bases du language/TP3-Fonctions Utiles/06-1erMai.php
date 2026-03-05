<?php
$jours =['dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'];

for ($annee = 2014; $annee <= 2037; $annee++){
    $timestamp = mktime(0, 0, 0, 5,1, $annee);
    $indice = date('w', $timestamp);
//    echo $annee. ' : ' .$jours[$indice]."\n";
    if ($indice === '0' || $indice === '6' ){
        if($annee < 2026) {
            echo "Pas de bol, en $annee, le premier mai était un $jours[$indice]\n<br>";
        } else {
            echo "Pas de bol, en $annee, le premier mai sera un $jours[$indice]\n<br>";
        }
    } else if ($indice === '5' ){
        if($annee < 2026) {
            echo "En $annee: Tu as eu le droit à un week end prolongé, le premier mai était un $jours[$indice]\n<br>";
        }else {
           echo "En $annee: Tu seras en week-end prolongé!! Le premier mai sera un $jours[$indice]\n<br>";
        }
    } else {
        echo "Le premier mai de l'année $annee tombe en semaine ($jours[$indice])\n<br>";
    }
}