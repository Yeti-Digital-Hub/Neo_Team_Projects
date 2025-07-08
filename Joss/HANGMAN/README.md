# jeu HANGMAN


# description 
le jeux de HANGMAN est un jeux qui se joue a deux ou seul dans notre cas il se joue seul .Le jeux consiste a deviner les lettres d'un mots, a chaque tantative rater un membre d'Homme aparait sur l'ecrant. apres un nombre bien definis de tantative rate l'Homme est pendu 

# REGLR DU JEUX 

Le principe est simple :

- le ou les joueurs jouent a tour de role 
- Le but est de trouver toutes les lettres d'un mot
- Des que toutes les lettres du mot sont trouve le jeu prend fin et il(s) gagne
- si par contre le nombre de tantative est atteint il(s) perdent


# FONCTION PRINCIPALE

- Fonction "AFFICHAGE" : donc le role est d'afficher un dessin qui est mis a jour a chaque iteration 

- la fonction "indice" : donc le role est de donner l'indice du mot a chercher 

- La fonction "word" : donc le role est de determoner le mot a chercher 

- la fonctio "space_fill" : donc le role est de remplir les tirets en fin de savoir les lettres que le(s) joueur(s) a deja trouve 


# FONCTIONNEMENT

 LE FONCTIONNEMENT DE JEUX EST LE SUIVANT :

j'ai utiliser la prigrammation modulaire. 

- un fichier fonction qui regroupe toutes mais fonctions 
- Un fichier principal (main) dans le quel je fais appel a ces fonctions 
- Au debut l'endroit ou l'homme sera pendu est afffiche avec la fonction "affuchage"
- Puis l'ince du mot (fonction "indice") a deviner et les tirets correspondant au nombre de lettre du mot a deviner 
- Ensuite on demande au joeur de deviner une lettre de mot a deviner 
- On verifie si la lettre entrer pae l'utilisateur appartien au mot a deviner 
- si oui on remplace le tiret correspondant a l'indice du mot par la lettre entre par l'utilisateur (fonction "space_fill") ,et on affiche les ;ettres trouvees 
- si non on affiche on afffiche juste les lettres deja trouve 
- on recommence le processus jusqu'a ce qu'on attien le nombre de tentative ou que le joeur trouve le mot 

# TECHNOLOGIE UTILISER 

ppour faire notre jeux on a besoin de :

- D'un langage de prongramtion : moi celui que j'ai utiliser est le PYTHON

- D'un Environnement de Devellopement Integre (IDE) :celui que j'ai utiliser est Visual Studio Code, mais je vourecommendrais d'utilser Pycharm

- D'un ordinateur, d'une tablette  ou meme d'un telephone portable

# Qui a travailler 

je suis le seul a avoir travailler dance jeux 



 