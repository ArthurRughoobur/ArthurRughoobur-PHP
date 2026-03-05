<?php
require_once '01-tableauMultidimensionnel.php';
require_once '02-tableau associatif.php';
$tableauPrincipale['Jean'] = $personnes2;
$tableauPrincipale['Dupont'] = $personnes;
foreach ($tableauPrincipale as $nom) {
    echo "élément :  $nom\n";
}