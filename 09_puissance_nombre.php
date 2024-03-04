<?php

/**
 * Consigne :
 *
 * Créez un programme qui affiche le résultat d’une puissance.
 * L’exposant ne pourra pas être négatif.
 *
 * Exemples d’utilisation :
 * $> node exo.js 2 3
 * 8
 *
 * Attention : je compte sur vous pour gérer les potentielles erreurs d’arguments.
 * Fonctions interdites:
 * -La fonction pow
 *
 */


if ($argc !== 3) {
    print "Erreur : arguments attendus : un chiffre suivi de son exposant. Ce dernier ne peut être négatif .\n";
    exit;
}


if (!isNumeric($argv[1])) {
    print "Le premier argument doit être un chiffre.\n";
    exit;
}

if (!isNumeric($argv[2])) {
    print "Le deuxieme argument doit être un chiffre.\n";
    exit;
}

$chiffre = intval($argv[1]);
$exposant = intval($argv[2]);

$i=1;
$resutat = 1; // X à la puissance 0 = 1
while ($i <= $exposant) {
    $resutat = $resutat * $chiffre;
    $i++;
}

print $resutat."\n";

function isNumeric(string $string) {
    return preg_match('/[0-9]+/', $string) && !preg_match('/\D/', $string);
}