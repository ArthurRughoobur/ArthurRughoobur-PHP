<?php

namespace TP02;
require_once 'Personnage.php';

use Exception;

trait KameHameHaTrait
{
    private float $puissance;
    private float $dernierLance;

    /**
     * @throws Exception
     */
    private function lancerKameHameHa(Personnage $personnage): void
    {

        if (microtime(true) - $this->$dernierLance < 0.001) {
            $this->dernierLance = microtime(true);
            throw new Exception('Tu dois régénérer de la puissance', 1);
        }
        $puissance = $this->$puissance * min(100, 1000 * (microtime(true) - $this->$dernierLance) - 1) / 100;
        $this->dernierLance = microtime(true);
        echo $this. 'lance un KameHameHa d\'une puissance de' . $puissance . ' vers' . $cible . '<br>';
    $personnage->blessure($puissance);
}
}