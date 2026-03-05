<?php

date_default_timezone_set('Europe/Paris');


for ($annee = 2014; $annee <= 2037; $annee++) {
    $paque = easter_date($annee);
    $ascension = strtotime('+39 days', $paque);
    echo date('d-m-Y',$ascension)."\n<br>";
}