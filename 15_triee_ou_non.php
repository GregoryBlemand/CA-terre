<?php

/**
 * Consigne :
 *
 * Créez un programme qui détermine si une liste d’entiers est triée ou pas.
 *
 * Exemples d’utilisation :
 * $> ruby exo.rb 9 8 3
 * Pas triée !
 *
 * $> ruby exo.rb 3 8 9 12
 * Triée !
 *
 * $> ruby exo.rb “Salut”
 * erreur.
 *
 * Fonctions interdites:
 * -La fonction sort
 *
 */

if ($argc < 4) {
    print "Erreur : Vous devez passer 3 nombres positifs ou plus en paramêtre\n";
    exit;
}

$inputList = [];
$sorted = true;

for ($i = 1; $i < $argc; $i++) {
    if (!isNumeric($argv[$i])) {
        print "Erreur : le paramêtre \"$argv[$i]\" n'est pas un nombre positif.\n";
        exit;
    }

    $inputList[$i] = intval($argv[$i]);

    if (count($inputList) === 1) {
        continue;
    }

    if ($inputList[$i-1] > $inputList[$i]) {
        $sorted = false;
        break;
    }
}

if ($sorted) {
    print "Cette liste est triée en ordre croissant !\n";
} else {
    print "Cette liste n'est pas triée en ordre croissant !\n";
}

function isNumeric(string $string) {
    return preg_match('/[0-9]+/', $string) && !preg_match('/\D/', $string);
}