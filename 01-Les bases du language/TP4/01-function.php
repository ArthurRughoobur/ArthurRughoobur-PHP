<?php


function nombreRand($nombre){
    $compteur = 0;

    $nbRand = rand(0,1000);
    while ($nbRand != $nombre){
        $compteur++;
        $nbRand = rand(0,1000);
    }
    echo "Le nombre : $nombre à été trouvé en $compteur de tentatives";
}

nombreRand(723);