# Dossier de Kelie
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

Supposons que **Kelie** travaille sur un nouveau projet appelé **Formulaire**.

1. Elle commence par **se placer dans la branche `main`** localement (après avoir cloné le dépôt).

2. Elle **crée une nouvelle branche** dédiée à son projet, avec une commande comme :

```bash
git checkout -b Neo_team_projets/Kelie/Formulaire
```

*(Cela crée une branche appelée `Neo_team_projets/Kelie/Formulaire`)*

3. Dans son dossier personnel (`Neo_team_projets/Kelie/`),  
Elle crée un **nouveau dossier** pour son projet :

```
Neo_team_projets/Kelie/Formulaire/
```

Et elle travaille dans ce dossier : fichiers HTML, CSS, PHP, Python, etc.

4. Ensuite elle **add**, **commit** et **push** :

```bash
git add .
git commit -m "Premier commit du projet Formulaire"
git push origin Neo_team_projets/Kelie/Formulaire
```

5. **Depuis GitHub**, elle crée une **Pull Request (PR)** pour demander de fusionner sa branche vers `main`.

---

### 🧠 Résumé clair du flux :

| Étape | Commande ou Action |
|:----|:----|
| 1 | Se placer sur `main` → `git checkout main` |
| 2 | Récupérer les dernières maj → `git pull origin main` |
| 3 | Créer une branche perso → `git checkout -b Neo_team_projets/Kelie/Formulaire` |
| 4 | Travailler dans `Neo_team_projets/Kelie/Formulaire/` |
| 5 | `git add .` → `git commit -m "Ajout projet Formulaire"` |
| 6 | `git push origin Neo_team_projets/Kelie/Formulaire` |
| 7 | Créer une **Pull Request** depuis GitHub |
| 8 | Revue et **fusion** de la PR vers `main` |

---

# 🎯 Defie : Générateur de Citations Dynamiques

Ce projet est un **générateur de citations** qui doit etre developper en utlisant du Html Css & JavaScript, qui propose à chaque clic une nouvelle citation accompagnée du nom de son auteur, tout en changeant la couleur du fond et en animant l'apparition/disparition de la citation (effets *fade-in* et *fade-out*).

---

# 🕹️ Règles du projet
- Une **citation** avec son **auteur** s'affiche à l'écran.
- À chaque clic sur un bouton **"Nouvelle citation"** :&é 
  - Une **nouvelle citation** est sélectionnée aléatoirement.
  - **La couleur de fond** de la page change de manière aléatoire.
  - **Une animation de sortie** (*fade-out*) est jouée avant de cacher l'ancienne citation.
  - **Une animation d'entrée** (*fade-in*) est jouée pour afficher la nouvelle citation.

---

# 📖 Comment un utilisateur pourra t-il y  jouer  utiliser
- Il clonera ou téléchargera ce dépôt.
- Ouvrira le fichier `index.html` directement dans un navigateur.
- Cliquera sur le bouton **"Nouvelle citation"** pour générer une nouvelle citation de façon dynamique.
- Observera le changement de fond et les animations douces entre chaque citation.

---

# 🖥️ Exemple de fonctionnement
```plaintext
Bienvenue sur le générateur de citations !

[Apparition de la citation]
"Le succès n’est pas la clé du bonheur. Le bonheur est la clé du succès." - Albert Schweitzer

[Cliquer sur "Nouvelle citation"]

[Animation de sortie de la citation précédente]
[Changement de couleur de fond]
[Animation d'entrée de la nouvelle citation]
"La vie est un mystère qu'il faut vivre, et non un problème à résoudre." - Gandhi
```
