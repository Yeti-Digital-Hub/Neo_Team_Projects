# password manager

# description

le password managerest un systeme permetant de de s'inscrire et de se connecter a une application 

# Role et utilite 

il est principalement uitliser dans les applications ayan besoin des informations personnel des utilisateurs . Il est utilise pour :
- Sécurité : chaque utilisateur est identifié et authentifié.

- Personnalisation : chacun peut avoir son environnement et ses fichiers propres.

- Gestion des accès : empêche les personnes non autorisées d’accéder à certaines ressources.

# les principales fonctions utilise

mon code est structure 03 fichiers
- le premier fichier est nome interface.py: il est compose de 4 fonctions(a chaque fonction correspond un bouton)

    Nous avons les fonctions les fonctions conexions et inscription permettent aux utilisateurs de se
 d'accesde au systeme s'il possedait edja un compte (s'il c'etait deja inscrit), et de cree sont compte s'il ne l'avait jamais fait.
    Il y a egalement les fonctions inscrit et connect. l'une permet
d'enregistrer les informations donne par l'utilisateur lors de l'inscription (incrit), et l'autre perment de verifier les information entrer par l'utiliasteur lors de la connexion.

- le deuxieme fichier est le fichier backpy
    il contien uniqquement la fonction enregistrer qui enregistre lesinformation d'inscription de l'utilisateur elle es utilise dans la fonction inscrit.

    BN: il est possible de defim=nir la foncton enregistrer directement dans la fonction inscrit et suprimer le fichier back.Ce travail serat peut etre fait apres.

- le denier fichhier est le fichier datajson: c'est nautre base de donne

# FONCTIONNEMENT 

Lors de l'ouverture du systeme l'utilisateur a deux choix:
- Soit il clique sur le bouton connexion pour se connecter : cela va execute la fonction connexion qui ouvre une autre fenetre dans la quel  personnelle (Nom, Prenom, Mot de pass) puis il clique sur connexion qui vas executer la fonction connect qui a pour role de verifier que ses informations sont dans notre base de donne 

- Soit il clique sur le bouton inscription pour d'iscrire: cela va executer la fonction insciption qui ouvre une autre fenetre que l'utilisateur devra remplir et cliquer sur pour cree son compte. Lorsqu'il clique sur inscription la fonction inscrit, le role de cette fonction est d'enregistrer les informations de l'utilisateur dans notre base de donne.


# TECHNOLOGIE UTILISE 

Pour realiser notre systeme on a utilise les technologies suivantes :

- Libraire tkinter pour le graphisme
- Librairie json pour la base de donne 
- librairie hashlib pour code le mot de pass
- Un IDE (Visual Studuo Code)
- un pc (HP)

# COMMENT EXECUTR LE PROGRAMME 

    Pour executer le code il faut avoir le code un interpreteur ou un IDE, puis l'escuter simplement le fichier interface graphique
    NB: avant d'executer le fichier interface rassurer vous d'avoir ouver seulement le dossier mot de passe

# INTERVENANT

    Je suis le seul a avoir travaille 