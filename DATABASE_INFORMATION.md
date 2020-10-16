# BIOBAT
BIOBAT is the ralational database dedicated to the project.

## Table of content
À venir

# Modélisation sémantique
## Contexte
BIOBAT est une base de données relationnelle permettant d'effectuer le suivi du paiement des joueurs d'une ligue garage (idéalement de balle-molle) dont les participants ont deux options de paiement :
1. Montant par saison
1. Montant par match.

## Structure globale de la base de données
Voir diagramme

- JOUEU (joueur)
  - ID
  - NOM
  - DAT_ENR
- PARTC (participe)
  - PAYM (match payé)
  - CC
- MATCH
  - DATE
  - SEM
  - PLUI 
- INSCR
  - REGU (se demander : joueur non régulier pertinent dans inscription? Sinon, joueur dans INSCR signifie regu et champ REGU caduc)
  - PAYS (saison payée)
- SAIS
  - AN
  - FRS (frais pour la saison)
  - FRM (frais pour un match)

Il découle du diagramme 

## Structure des tables
### Table JOUEU
lOREM IPSUM.


## Contraintes aditionnelles

- Le maximum payable par les joueurs non réguliers est égal aux frais pour la saison.

# Import

À partir d'une transformation des tableaurs BTCN*

Pour se rappeler de BTNC, caractères - 1.
