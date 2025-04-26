# Dossier de Joss
Dépose ici tous tes projets personnels.

# Dans chaque sous-dossier de projet :

Crée un fichier README.md.

Explique :

L'objectif du projet.

Les technos utilisées.

Comment l’exécuter.

Qui y travaille.


# ✅ flux de travail recommandé pour chaque membre :

### 🛠 Voici le processus pour créer ta branche individuelle a chaque nouveau Travail :

Supposons que **Joss** travaille sur un nouveau projet appelé **Reconnaissance_Faciale**.

1. il commence par **se placer dans la branche `main`** localement (après avoir cloné le dépôt).

2. il **crée une nouvelle branche** dédiée à son projet, avec une commande comme :

```bash
git checkout -b Neo_team_projets/Joss/Reconnaissance_Faciale
```

*(Cela crée une branche appelée `Neo_team_projets/Joss/Reconnaissance_Faciale`)*

3. Dans son dossier personnel (`Neo_team_projets/Joss/`),  
il crée un **nouveau dossier** pour son projet :

```
Neo_team_projets/Joss/Reconnaissance_Faciale/
```

Et il travaille dans ce dossier : fichiers HTML, CSS, PHP, Python, etc.

4. Ensuite il **add**, **commit** et **push** :

```bash
git add .
git commit -m "Premier commit du projet Reconnaissance_Faciale"
git push origin Neo_team_projets/Joss/Reconnaissance_Faciale
```

5. **Depuis GitHub**, il crée une **Pull Request (PR)** pour demander de fusionner sa branche vers `main`.

---

### 🧠 Résumé clair du flux :

| Étape | Commande ou Action |
|:----|:----|
| 1 | Se placer sur `main` → `git checkout main` |
| 2 | Récupérer les dernières maj → `git pull origin main` |
| 3 | Créer une branche perso → `git checkout -b Neo_team_projets/Joss/Reconnaissance_Faciale` |
| 4 | Travailler dans `Neo_team_projets/Joss/Reconnaissance_Faciale/` |
| 5 | `git add .` → `git commit -m "Ajout projet Formulaire"` |
| 6 | `git push origin Neo_team_projets/Joss/Reconnaissance_Faciale` |
| 7 | Créer une **Pull Request** depuis GitHub |
| 8 | Revue et **fusion** de la PR vers `main` |



# DEFI 1 : Creer un jeu de Tic Tac Toe avec du Python

---

# 🎯 Jeu Tic Tac Toe en Python

Ce projet est un **jeu de Tic Tac Toe** (aussi appelé "Morpion"), inspiré du jeu classique où deux joueurs s'affrontent pour aligner trois symboles (X ou O) sur une grille 3x3.

---

# 🕹️ Règles du Jeu
- Deux joueurs (ou un joueur contre l'ordinateur dans les évolutions futures) jouent à tour de rôle.
- Le but est d'**aligner trois symboles identiques** horizontalement, verticalement ou en diagonale.
- Si toutes les cases sont remplies sans qu’il y ait de gagnant, la partie est déclarée **match nul**.

---

# 📖 Comment GuruMiT va-t-il jouer
- Il va cloner ou telecharger votre projet.
- Lancez le fichier `tic_tac_toe.py` dans son environnement Python.
- À chaque tour, il va devoir choissir la position où il souhait placer son symbole (X ou O) :
  - La grille de jeu est représentée par les chiffres 1 à 9.
- Le jeu affichera la grille mise à jour après chaque coup et annoncera le gagnant ou un match nul.

---

# Étapes du plan :
1.Créer un plateau de jeu vide :

Utiliser une liste de 9 éléments ([" ", " ", " ", " ", " ", " ", " ", " ", " "]).

2.Afficher le plateau :

Créer une fonction afficher_plateau() pour bien afficher les cases du morpion.

3.Demander au joueur de jouer :

Demander un numéro de case (de 1 à 9).

Vérifier si la case est vide avant de placer.

4.Changer de joueur :

Passer de "X" à "O" après chaque tour ou du Joueur A au Joueur B.

5.Vérifier si quelqu'un gagne :

Créer une fonction verifier_victoire() pour vérifier les lignes, colonnes et diagonales.

6.Vérifier si égalité (match nul) :

Si toutes les cases sont remplies sans gagnant.

7.Boucler jusqu’à fin du jeu :

Jeu continue tant qu’il n'y a pas victoire ou égalité.


# 🖥️ Exemple d’une partie
```plaintext
Bienvenue dans le jeu du Tic Tac Toe Utilisateur GuruMiT !

Plateau :
1 | 2 | 3
---------
4 | 5 | 6
---------
7 | 8 | 9

GuruMiT (X), choisissez votre position : 5

Plateau :
1 | 2 | 3
---------
4 | X | 6
---------
7 | 8 | 9

Joueur 2 (O), choisissez votre position : 1

Plateau :
O | 2 | 3
---------
4 | X | 6
---------
7 | 8 | 9

GuruMiT 1 (X), choisissez votre position : 2

Plateau :
O | X | 3
---------
4 | X | 6
---------
7 | 8 | 9

Joueur 2 (O), choisissez votre position : 8

Plateau :
O | X | 3
---------
4 | X | 6
---------
7 | O | 9

GuruMiT 1 (X), choisissez votre position : 6

Plateau :
O | X | 3
---------
4 | X | X
---------
7 | O | 9

Joueur 2 (O), choisissez votre position : 7

Plateau :
O | X | 3
---------
4 | X | X
---------
O | O | 9

GuruMiT 1 (X), choisissez votre position : 4

Plateau :
O | X | 3
---------
X | X | X  ----> Les 3 case de GuruMiT sont aligner ( fin de la partie )
---------
O | O | 9

...

🎉 Félicitations ! GuruMiT 1 a gagné !

```

# 🧠 Notions que tu vas apprendre :

| Notion                         | Application dans ce projet                                 |
|---------------------------------|------------------------------------------------------------|
| Manipulation de listes (list)   | Représenter le plateau                                     |
| Fonctions (def)                 | Séparer ton code en petites parties                       |
| Logique conditionnelle complexe (if) | Vérifier les conditions de victoire                 |
| Boucles (while)                 | Maintenir le jeu jusqu’à la fin                           |
| Organisation du code            | Structurer ton programme proprement                       |
| Gestion d’entrées utilisateur   | Vérifier que l'utilisateur entre un bon chiffre           |


---

