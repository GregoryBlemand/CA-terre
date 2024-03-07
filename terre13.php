<?php

/**
 * Consigne :
 *
 * Créez un programme qui transforme une heure affichée en format 12h en une heure affichée au format 24h.
 *
 * Exemples d’utilisation :
 * $> ruby exo.rb 11:40PM
 * 23:40
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
    print "On attend une heure sous la forme 05:38PM .\n";
    exit;
}

if (!preg_match('/^(\d+)[:h](\d+)([A|P]M)$/', $argv[1], $matches)) {
    print "Erreur : l'argument à fournir doit être de la forme \"12:54PM\"\n";
    exit;
}

$hours = intval($matches[1]);
$minutes = intval($matches[2]);
$meridiem = $matches[3];

if ($hours > 12 || $hours === 0) {
    print "Erreur : En notation anglaise, les heures sont de 1 à 12 gros malin !\n";
    exit;
}

if ($minutes > 59) {
    print "Erreur : Il n'y a que 60 minutes dans une heure gros malin !\n";
    exit;
}


print convert12hTo24h($hours, $minutes, $meridiem);

function convert12hTo24h(int $hours, int $minutes, string $meridiem = 'AM'): string
{
    $minutesString = completeWithZero($minutes);
    $hoursString = completeWithZero($hours);

    if ('AM' === $meridiem) {
        if (12 === $hours) {
            $hoursString = '00';
        }
        return $hoursString.':'.$minutesString."\n";
    }

    if ('PM'=== $meridiem) { // après-midi à partir de 12:00
        if (12 !== $hours) {
            $hoursString = $hours + 12;
        }
    }


    return $hoursString.':'.$minutesString."\n";
}

function completeWithZero(int $number)
{
    if ($number < 10) {
        return '0'.$number;
    }

    return $number;
}