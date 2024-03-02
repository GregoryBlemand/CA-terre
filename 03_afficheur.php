<?php

/**
 * Consigne :
 *
 * Créez un programme qui affiche les arguments qu’il reçoit ligne par ligne, peu importe le nombre d’arguments.
 *
 * Exemples d’utilisation :
 * $> ruby exo.rb je suis solide !
 * je
 * suis
 * solide
 * !
 *
 */

$i = 0;

while ($i < $argc) {

    if (0 !== $i) {
        print $argv[$i]."\n";
    }

    $i++;
}

//var_dump($argv, $argc);
