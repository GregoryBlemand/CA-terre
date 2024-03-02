<?php

/**
 * Consigne :
 * Créez un programme qui affiche l’alphabet en lettres minuscules suivi d’un retour à la ligne.
 *
 * Exemples d’utilisation :
 * $> python exo.py
 * abcdefghijklmnopqrstuvwxyz
 * $>
 *
 * Attention : votre programme devra utiliser une boucle.
 */

$alphabetLength = 26;
$charStart = 97; // chr(97) == 'a'
$alphabet = '';

for ($i = 0; $i < $alphabetLength; $i++){
    $alphabet .= chr($charStart+$i);
}
print $alphabet."\n";