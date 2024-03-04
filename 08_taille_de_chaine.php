<?php

/**
 * Consigne :
 *
 * Créez un programme qui affiche le nombre de caractères d’une chaîne de caractères passée en argument.
 *
 * Exemples d’utilisation :
 * $> python exo.py “Hello world!”
 * 12
 *
 * $> python exo.py
 * erreur.
 *
 * $> python exo.py “Bonjour” “Aurevoir”
 * erreur.
 *
 * $> python exo.py 10
 * erreur.
 *
 * Fonctions interdites:
 * -La fonction length
 * -La fonction size
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

if (! preg_match('/\D/', $string)) {
    print "argument invalide.\n";
    exit;
}

$i = 0;

// en php une chaine peut être concidéré comme un tableau de caractères
while (isset($string[$i])) {
    $i++;
}

echo $i."\n";