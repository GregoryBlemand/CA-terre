<?php

/**
 * Consigne :
 *
 * Créez un programme qui affiche l’alphabet à partir de la lettre donnée en argument en lettres minuscules suivi d’un retour à la ligne.
 *
 * Exemples d’utilisation :
 * $> python exo.py n
 * nopqrstuvwxyz
 * $>
 *
 * Attention : votre programme devra utiliser une boucle.
 *
 */

if ($argc === 1) {
    echo "Aucun argument... une seule lettre suffit\n";
    exit;
}

if ($argc > 2) {
    echo "Trop d'arguments... une seule lettre suffit\n";
    exit;
}

$startingLetter = strtolower($argv[1]);
if (strlen($startingLetter) > 1) {
    echo "L'argument est trop long... une seule lettre suffit\n";
    exit;
}

$alphabetLength = 26;
$charStart = 97;
$displayChars = false;
$alphabet = '';

for ($i = 0; $i < $alphabetLength; $i++){
    if ($startingLetter === chr($charStart+$i)) {
        $displayChars = true;
    }

    if ($displayChars) {
        $alphabet .= chr($charStart+$i);
    }
}
print $alphabet."\n";
