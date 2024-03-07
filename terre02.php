<?php

/**
 * Consigne :
 *
 * Créez un programme qui affiche son nom de fichier.
 *
 * Exemples d’utilisation :
 * $> node exo.js
 * exo.js
 * $> node crevette.js
 * crevette.js
 *
 */

print $argv[0]."\n";
// other alternative : print basename(__FILE__)."\n";
