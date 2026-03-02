<?php
require_once 'ExempleTraitConflit.php';

$inst = new ExempleTraitConflit();
$inst->setNom('HelloWorld!');
echo 'appel à getNom() : ' . $inst->getNom();
