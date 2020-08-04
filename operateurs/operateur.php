<?php

/**
 * OPERATEUR ARITHMÉTIQUE
 *      + ADDITION
 *      - SOUSTRACTION
 *      * MULTIPLICATION
 *      / DIVISION
 *      % MODULO
 *      ** A LA PUISSANCE 
 * 
 * OPERATEUR DE COMPARAISON
 *      == EGALITÉ
 *      < STRICTEMENT INFERIEUR
 *      > STRICTEMENT SUPPERIEUR
 *      <= INFERIEUR OU EGAL
 *      >= SUPERRIEUR OU EGAL
 *      === EGALITÉ TYPE
 *      ! NÉGATIVITÉ
 * OPERATEUR D'ASSIGNATION
 *      += 
 *      -=
 *      *=
 *      /=
 *      %=
 *      .=
 * OPERATEUR LOGIQUE BINAIRE
*    &   1 OU 0
*    |
 * OPERATEUR LOGIQUE BOOLEAN
 *      && OU END -> ET
 *      || OU OR  -> OU
 *      XOF ^
 * OPERATEUR DE FONCTION
 *  ...
 * OPERATEUR DE RÉFERENCE
 *  &NOMDEVARIABLE
 * OPERATEUR D'OBJECT
 *  ->
 * OPERATEUR DE RÉSOLUTION DE PORTÉ
 *  ::
 * OPERATEUR DE CONTROLE D'ERREUR
 * @
 * OPERATION D'INCREMENTATION
 *  ++
 *  --
 * OPERATEUR TENAIRE
 *  ? 'BON' : 'MAUVAIS
 * OPERATEUR BINAIRE
 *  ??
 * 
 */

$variable1;
$variable2 = 0;


$result = $variable1 ?? 'mauvais';

var_dump($result);

