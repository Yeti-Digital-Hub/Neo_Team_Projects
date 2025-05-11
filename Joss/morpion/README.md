# jeu de Tic Tac Toe


# description 
le jeu d jeu de Tic Tac Toe encore appele jeu de morpiomest un jeu qui se joue a deux (JOUEUR1 VS machine ; JOUEUR1 VS JOEUR2)dont le le but est d'aliger 3 symboles (X;O).

# REGLES DU JEU

Le principe du jeu est simple :
- Deux joueurs jouent a tour de role
-Le but est d'**aligner trois symboles identique** soit de facon vertical, Horizontal ou en Diagonales
- Si toutes les cases sont remplies sans qu’il y ait de gagnant, la partie est déclarée **match nul**.

# FONCTIONS PRINCIPALE 
- fonction "affichage" : elle prend en parametre les listes 'p','d','T' et sert a afficher le plateau de jeu au debut et a chaque foi q'un joueur joue

- fonction "gagnant" : elle prend en parametre l'identifient du joueur (id)
et permet de verifier si un joueur a gagner apres qu'il est jouer 

- fonction "PositionnerPoint" : permet de positionner le choix du joueur dans le plateau de jeu elle prend en parametre les listes 'p','D','T', et l'identifient du joueur (id) 

# FONCTIONNEMENT

- Au debut du jeu le plateau s'affiche 
- ensuite la fonction positionnepoint demande ou le joueur veut jouer et remplace le numero de la case par sin identifiant 
- si la case ou le joueur veut jouer est deja occupe, alors la fonction positionnerpoint redemande son choix
- Puis la fonction gagnant verifie s'il y a trois meme points aligne. Si c'est le cas le jeux s'arrete
- Au cas contraire on passe au joueur 2 et on fait la meme chose 
- Si aucun des n'a gagner a ce tour on recommence jusqu'a ce que le plateau soit remplit