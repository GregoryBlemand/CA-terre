<?php

/**
 * Consigne :
 *
 * Créez un programme qui affiche l’inverse de la chaîne de caractères donnée en argument.
 *
 * Exemples d’utilisation :
 * $> node exo.js “Hello world!”
 * !dlrow olleH
 *
 * $> node exo.js “lehciM”
 * Michel
 *
 * Attention : je compte sur vous pour gérer les potentielles erreurs d’arguments.
 *
 * Fonctions interdites:
 * -La fonction reverse
 *
 */

if ($argc > 2) {
    print "trop d'arguments une chaine de caractère peut être passée entre guillemets \" .\n";
    exit;
}

if ($argc === 1) {
    print "Vous devez passer une phrase ou un mot à inverser.\n";
    exit;
}

$string = $argv[1];
$stringLength = strlen($string);

for ($i = 1;$i <= $stringLength; $i++) {
    print substr($string, $stringLength - $i, 1);
}
print "\n";
