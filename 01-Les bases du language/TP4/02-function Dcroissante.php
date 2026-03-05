<?php

function Dcroissante($a,$b) {
    if ($a < $b) {
        echo "$b,$a";
    } else if ($b < $a) {
        echo "$a,$b";
    }else {
        echo "Nombres égaux";
    }
}

Dcroissante(1,2);