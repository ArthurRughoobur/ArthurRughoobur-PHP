<?php
$true = true;
$quarenteDeux = 42;
$douze = 12.34;
$HELLO = "Hello !";

//------question 1-----------
var_dump($true);
var_dump($quarenteDeux);
var_dump($douze);
var_dump($HELLO);

//---------question 2----------
const CONSTANTE = "Bonjour !";
$var = 42;

echo "La Const = " .CONSTANTE ."\n";
echo 'La constante = ' .CONSTANTE."\n";

echo 'la Variable = ' .$var ."\n";
echo  "var = $var\n";

//---------question 3----------
// false
// true
// false
//false
//true

//-----------question 4------------
//PHP 8 *3

//-------question 5--------
//PHP8
//PHP8
//8e version de PHP
//80
//64

$x = "PHP8";
var_dump($x);
$a = &$x;
var_dump($a);
$y = " 8eme version de PHP";
var_dump($y);
$z = $y * 10;
var_dump($z);
$x = $y * $y;
var_dump($x);


