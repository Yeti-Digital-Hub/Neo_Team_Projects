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
