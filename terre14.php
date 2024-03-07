<?php

/**
 * Consigne :
 *
 * Créez un programme qui prend en paramètre trois entiers et affiche la valeur du milieu.
 *
 *
 * Exemples d’utilisation :
 * $> ruby exo.rb 11 40 34
 * 34
 *
 * $> ruby exo.rb 2 1 3
 * 2
 *
 * $> ruby exo.rb 2 2 2
 * erreur.
 *
 * Fonctions interdites:
 * -La fonction sort
 *
 */

if ($argc !== 4) {
    print "Erreur : Vous devez passer 3 nombres en paramêtre\n";
    exit;
}

$numbersToSort = [];
$sortedCouple = [];

for ($i = 1; $i < $argc; $i++) {
    if (!isNumeric($argv[$i])) {
        print "Erreur : le paramêtre $argv[$i] n'est pas un nombre positif.\n";
        exit;
    }

    $number = intval($argv[$i]);

    if (in_array($number, $numbersToSort)) {
        print "Erreur : Nous devons trier 3 nombres DIFFERENTS.\n";
        exit;
    }

    $numbersToSort[] = $number;

    if (!isset($sortedCouple['bottom'])) {
        $sortedCouple['bottom'] = $number;
        continue;
    }

    if (!isset($sortedCouple['top'])) {
        if ($number > $sortedCouple['bottom']) {
            $sortedCouple['top'] = $number;
        } else {
            $sortedCouple['top'] = $sortedCouple['bottom'];
            $sortedCouple['bottom'] = $number;
        }
        continue;
    }

    if ($number < $sortedCouple['bottom']) {
        print $sortedCouple['bottom']."\n";
    } elseif ($number > $sortedCouple['top']) {
        print $sortedCouple['top']."\n";
    } else {
        print $number."\n";
    }

}

function isNumeric(string $string) {
    return preg_match('/[0-9]+/', $string) && !preg_match('/\D/', $string);
}