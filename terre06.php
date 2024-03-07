<?php

/**
 * Consigne :
 *
 * Créez un programme qui affiche le résultat et le reste d’une division entre deux nombres.
 *
 * Exemples d’utilisation :
 * $> python exo.py 5 2
 * résultat: 2
 * reste: 1
 *
 * $> python exo.py 10 0
 * erreur.
 *
 * $> python exo.py 3 5
 * erreur.
 *
 */

if ($argc !== 3) {
    print "utilisation du script : `php 06_division 53 6`\n";
    exit;
}

$numerateur = intval($argv[1]);
$denominateur = intval($argv[2]);

if (0 === $denominateur) {
    print "Erreur division par 0 impossible";
    exit;
}

if ($numerateur < $denominateur) {
    print "Erreur : la réponse ne peut pas être entière";
    exit;
}

$reste = $numerateur % $denominateur; // le modulo c'est le reste...
$resultat = ($numerateur - $reste) / $denominateur;

print 'résultat : '.$resultat."\n";
print 'reste : '.$reste."\n";