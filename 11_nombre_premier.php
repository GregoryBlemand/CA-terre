<?php

/**
 * Consigne :
 *
 * Créez un programme qui affiche si un nombre est premier ou pas.
 *
 * Exemples d’utilisation :
 * $> node exo.js 5
 * Oui, 5 est un nombre premier.
 *
 * $> node exo.js 6
 * Non, 6 n’est pas un nombre premier.
 *
 * Attention : 0 et 1 ne sont pas des nombres premiers. Gérez les erreurs d’arguments.
 *
 */

if ($argc !== 2) {
    if (1 == $argc) {
        print "Erreur : aucun argument fourni.\n";
    } else {
        print "Erreur : trop d'arguments !\n";
    }
    print "On attend un nombre entier positif.\n";
    exit;
}

if (!isNumeric($argv[1])) {
    print "Le paramètre à passer doit être un nombre entier positif.\n";
    exit;
}

$number = intval($argv[1]);

if (isPrime($number)) {
    print "Oui, $number est un nombre premier.\n";
} else {
    print "Non, $number n’est pas un nombre premier.\n";
}

function isNumeric(string $string) {
    return preg_match('/[0-9]+/', $string) && !preg_match('/\D/', $string);
}

function isPrime(int $number) {
    if ($number <= 1) {
        return false;
    } elseif ($number <= 3) {
        return true;
    } elseif ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }
    $dividerToTest = 5;

    // on teste les diviseurs jusqu'à racine carré de $number
    while ($dividerToTest * $dividerToTest <= $number) {
        // A partir de 5 les nombres premiers ont un écart de 6 à 8
        if ($number % $dividerToTest == 0 || $number % ($dividerToTest + 2) == 0) {
            return false;
        }
        $dividerToTest += 6;
    }
    return true;
}