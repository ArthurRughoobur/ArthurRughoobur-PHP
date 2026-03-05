<?php
setlocale(LC_TIME, 'fr_FR');
$date = '25-12-2025';
$jours =['dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'];

$timestamp = strtotime($date);
echo $jours('w', $timestamp);