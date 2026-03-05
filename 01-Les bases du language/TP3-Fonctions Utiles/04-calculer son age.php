<?php
function calculeAge($dateDeNaissance)
{  //conversion date de naissance en timestamp
   $timestanmNaissance = strtotime($dateDeNaissance);

   $age = date('Y') -date('Y', $timestanmNaissance);
   return $age;
}

echo calculeAge('20-10-1993');