<?php

/**
 * Consigne :
 *
 * Créez un programme qui permet de déterminer si l’argument donné est un entier pair ou impair..
 *
 * Exemples d’utilisation :
 * $> ruby exo.rb 2
 * pair
 *
 * $> ruby exo.rb 5
 * impair
 *
 * $> ruby exo.rb Bonjour
 * Tu ne me la mettras pas à l’envers.
 *
 * $> ruby exo.rb
 * Tu ne me la mettras pas à l’envers.
 *
 * Attention : gérez aussi les entiers négatifs.
 *
 * Fonctions interdites:
 * -En Ruby: even? et odd?
 *
 */

if ($argc === 1) {
    print "Tu ne me la mettras pas à l’envers.\n";
    exit;
}

if ($argc > 2) {
    print "Trop d'arguments... un seul suffit\n";
    exit;
}

$argument = $argv[1];
if (preg_match('/\D/', $argument) && !preg_match('-', $argument)) {
    print "Tu ne me la mettras pas à l’envers.\n";
    exit;
}

print empty($argument % 2) ? "pair\n" : "impair\n";
