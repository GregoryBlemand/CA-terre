<?php

/**
 * Consigne :
 *
 * Créez un programme qui transforme une heure affichée en format 24h en une heure affichée en format 12h.
 *
 * Exemples d’utilisation :
 * $> ruby exo.rb 23:40
 * 11:40PM
 *
 * Attention : midi et minuit.
 *
 */

if ($argc !== 2) {
    if (1 == $argc) {
        print "Erreur : aucun argument fourni.\n";
    } else {
        print "Erreur : trop d'arguments !\n";
    }
    print "On attend une heure sous la forme 13:38 .\n";
    exit;
}

if (!preg_match('/^(\d+)[:h](\d+)$/', $argv[1], $matches)) {
    print "Erreur : l'argument à fournir doit être de la forme \"15h54\" ou \"15:54\"\n";
    exit;
}

$hours = intval($matches[1]);
$minutes = intval($matches[2]);

if ($hours > 23) {
    print "Erreur : Il n'y a que 24 heures dans une journée gros malin !\n";
    exit;
}

if ($minutes > 59) {
    print "Erreur : Il n'y a que 60 minutes dans une heure gros malin !\n";
    exit;
}

print convert24hTo12h($hours, $minutes);

function convert24hTo12h(int $hours, int $minutes): string
{
    $minutesString = completeWithZero($minutes);
    $hoursString = completeWithZero($hours);

    if ($hours === 0) { // minuit
        return '12:'.$minutesString.'AM'."\n";
    }

    if ($hours < 12) {
        return $hoursString.':'.$minutesString.'AM'."\n";
    }

    if ($hours === 12) { // midi
        return $hoursString.':'.$minutesString.'PM'."\n";
    }

    return completeWithZero($hours - 12).":".$minutesString."PM\n";

}

function completeWithZero(int $number)
{
    if ($number < 10) {
        return '0'.$number;
    }

    return $number;
}