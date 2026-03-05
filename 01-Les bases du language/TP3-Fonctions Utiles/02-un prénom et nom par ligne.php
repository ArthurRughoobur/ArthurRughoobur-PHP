<?php
$list = "Jean Dujardin, Maëlstrom Seigneur, Baptwix Leblanc, Omar Sy";
$listPersonnes = explode(", ", $list);
for ($i = 0; $i < count($listPersonnes); $i++) {
    echo $listPersonnes[$i] ."<br>";
}
