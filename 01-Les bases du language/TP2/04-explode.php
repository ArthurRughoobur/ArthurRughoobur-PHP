<?php
$listeMail = 'azdzedzedzed@gmail.com, adadj@ezfojefz.com, ezoeeoeo@gmail.com, dezlfbzefez@feojfeaz.fr';
foreach ($listeMail as $email) {


    $serverName = explode('@', $email)[1];
    if (isset($domaines[$serverName])) {
        $domaines[$serverName]++;
    } else {
        $domaines[$serverName] = 1;
    }
}
    var_dump($serverName);

