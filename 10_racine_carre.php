<?php

/**
 * Consigne :
 *
 * Créez un programme qui affiche la racine carrée d’un entier positif.
 *
 * Exemples d’utilisation :
 * $> node exo.js 9
 * 3
 *
 * Attention : je compte sur vous pour gérer les potentielles erreurs d’arguments.
 *
 * Fonctions interdites:
 * -La fonction sqrt
 *
 */

if ($argc !== 2) {
    print "Erreur : argument attendu : un chiffre dont on veut la racine carré .\n";
    exit;
}

if (!isNumeric($argv[1])) {
    print "Le paramètre à passer doit un nombre entier positif";
    exit;
}

// racine carré de x équivaut à x exposant 0.5 (source : https://www.studysmarter.fr/resumes/mathematiques/algebre/puissance-et-racine-carree/)
$nombre = intval($argv[1]);
$resultat = pow($nombre, '0.5');

print $resultat."\n";

function isNumeric(string $string) {
    return preg_match('/[0-9]+/', $string) && !preg_match('/\D/', $string);
}
