# 🗂️ Dossier Personnel de Joss

Bienvenue dans l’espace de développement de **Joss**.  
Tous les projets présents dans ce dossier sont des **initiatives personnelles** dans le cadre de son évolution technique au sein de la team **Neo**.

---

## ⏳ Objectif global

Chaque projet doit être **conçu, développé, testé et finalisé** en **exactement 1 mois**, ni plus, ni moins.  
Ce rythme soutenu vise à :

- Renforcer la discipline de travail
- Stimuler la créativité et la prise d’initiative
- Construire un portfolio riche et maîtrisé
- Expérimenter des stacks variés en un temps court

---

## 📁 Structure du dossier

Chaque projet de Joss est rangé dans un **sous-dossier distinct** :

Chaque dossier de projet **doit contenir un fichier `README.md`** clair et complet expliquant :

- 🎯 L’objectif du projet
- 🧰 Les technologies utilisées
- 🛠️ Les instructions pour exécuter le projet
- 👤 Les membres impliqués 
---

## ✅ Flux de travail recommandé

### 🧪 Création et gestion de branche Git

Chaque nouveau projet doit suivre ce protocole :

1. Se placer sur la branche `main` :
   ```bash
   git checkout main
   git pull origin main
   ```
   
2. Créer une nouvelle branche dédiée au projet :

```bash
git checkout -b Neo_team_projets/Joss/Nom_du_projet
```

3. Créer un dossier dans :

```
Neo_team_projets/Joss/Nom_du_projet/
```

4. Travailler à l'intérieur :

* Scripts Python
* README.md
* Ressources (JSON, .txt, etc)

5. Ajouter, committer et push :

```bash
git add .
git commit -m "Initialisation du projet Nom_du_projet"
git push origin Neo_team_projets/Joss/Nom_du_projet
```

6. Depuis GitHub, créer une **Pull Request** pour demander à fusionner ta branche vers `main`.

---

## 📦 Projets prévus

| Nom du projet         | Thématique                       | Délai imparti | Langages                            | Dossier                                            |
| --------------------- | -------------------------------- | ------------- | ------------------------------------| -------------------------------------------------- |
| `Generateur_QR_Code`  | Terminal / Génération d’image    | /             | Python (`qrcode`)                   | `Neo_team_projets/Joss/Generateur_QR_Code/`        |
| `Hangman`             | Jeu / Logique conditionnelle     | /             | Python                              | `Neo_team_projets/Joss/Hangman/`                   |
| `Password_Manager`    | Sécurité / Stockage local        |/              | Python                              | `Neo_team_projets/Joss/Password_Manager/`          |
| `Email_Formatter`     | Automatisation / Formatage email | /             | Python                              | `Neo_team_projets/Joss/Email_Formatter/`           |
| `User_Login_System`   | Authentification / Hashing       | /             | Python                              | `Neo_team_projets/Joss/User_Login_System/`         |
| `Inventory_Tracker`   | Terminal / CRUD                  | /             | Python                              | `Neo_team_projets/Joss/Inventory_Tracker/`         |
| `NBA_API_Stats`       | API / Traitement JSON            | /             | Python (requests, json)             | `Neo_team_projets/Joss/NBA_API_Stats/`             |
| `Terminal_Chat`       | Simulateur de discussion         | 1 mois        | Python                              | `Neo_team_projets/Joss/Terminal_Chat/`             |
| `REST_API_JSON_Local` | Simulation API / Backend local   | /             | Python                              | `Neo_team_projets/Joss/REST_API_JSON_Local/`       |
| `Appli_Flask`         | Web / Framework Flask            | 1 mois        | Python (Flask, Jinja, SQLite)       | `Neo_team_projets/Joss/Appli_Flask_TeachersDuNet/` |



---


## 📌 Objectif général des projets

Réaliser une **série de projets en ligne de commande (terminal)** avec Python, chacun ayant une portée bien définie, en appliquant les bonnes pratiques de développement, versionnement, et organisation de code.

📅 **Durée : Tous ces projets doivent être finalisés en l'espace d'exactement 1 mois.**

---

## 📂 Liste des mini projets à réaliser

### 1. QR Code Generator

**Objectif** : Générer automatiquement des QR codes à partir de textes ou d’URLs.

**Technos utilisées** : Python, bibliothèque `qrcode`, `Pillow`.

### 2. Hangman (Jeu du Pendu)

**Objectif** : Jeu classique du pendu en terminal avec nombre d’essais limités.

**Technos utilisées** : Python, logique conditionnelle, `random`, gestion d’input.

### 3. Password Manager

**Objectif** : Sauvegarder et gérer des mots de passe de manière sécurisée en local.

**Technos utilisées** : Python, gestion de fichiers, `hashlib`, `getpass`.

### 4. Email Formatter

**Objectif** : Formater dynamiquement du contenu d'email (texte ou HTML).

**Technos utilisées** : Python, manipulation de chaînes, templates.

### 5. User Login System *(projet commun avec Alex)*

**Objectif** : Système d'authentification avec inscription, login et vérification de mots de passe.

**Technos utilisées** : Python, `hashlib`, gestion de fichiers, logique de session.

### 6. Simple Inventory Tracker

**Objectif** : Gérer dynamiquement un petit inventaire avec ajout/suppression/modification.

**Technos utilisées** : Python, fichiers `.json`, dictionnaires, menus dynamiques.

### 7. NBA Stats & Current Scores

**Objectif** : Récupérer les statistiques des matchs NBA via une API et les afficher en terminal.

**Technos utilisées** : Python, API REST, `requests`, manipulation de JSON.

### 8. Terminal Chat *(projet commun avec Alex)*

**Objectif** : Simuler une messagerie en ligne de commande entre deux utilisateurs.

**Technos utilisées** : Python, lecture/écriture de fichiers, timestamps.

### 9. REST API Simulation with JSON *(projet commun avec Alex)*

**Objectif** : Simuler localement le comportement d’une API REST via manipulation de fichiers JSON.

**Technos utilisées** : Python, `json`, architecture CRUD, séparation du code par module.

---


## 📚 Détail sur le projet principal : Application Web en utilisant flask 
Ce projet consiste à suivre et reproduire intégralement le tutoriel "Flask (Français) - Découverte du microframework Web Python" disponible sur la chaîne LES TEACHERS DU NET .

Objectifs pédagogiques :

- Comprendre le rôle d’un micro-framework web

- Créer une application Flask structurée avec app.py, templates, static, layout, etc.

- Définir des routes (@app.route()), gérer des erreurs personnalisées (@app.errorhandler(404)), etc.

- Utiliser les templates Jinja2, render_template(), les blocs extends, block, les partials, les includes

- Connecter une base de données SQLite avec SQLAlchemy

- Effectuer des opérations CRUD sur une table Post

- Organiser le code pour une meilleure lisibilité et maintenabilité

⚠️ Ce projet doit reproduire fidèlement le contenu du tutoriel et être réalisé en 1 mois maximum.


## 🗂️ À faire dans chaque projet

Dans le dossier de chaque projet, ajoute un fichier `README.md` avec les sections suivantes :

### 🔹 Objectif du projet

Explique ce que fait ton projet, en quelques phrases.

### 🔹 Technologies utilisées

Indique les bibliothèques ou modules Python que tu as utilisés.

### 🔹 Instructions d'exécution

Indique la commande pour exécuter ton script, par exemple :

```bash
python main.py
```

Et les prérequis s’il y en a (`pip install` etc.).

### 🔹 Auteur

Ton prénom (Joss) + date du début du projet.

---

### 🧠 Compétences que tu vas développer :

| Compétence             | Projets concernés                            |
| ---------------------- | -------------------------------------------- |
| Entrées utilisateur    | Hangman, Inventory Tracker, Login, Chat      |
| Fichiers & JSON        | Login, Inventory, REST API, Password Manager |
| Sécurité & Hashing     | Login, Password Manager                      |
| Requêtes HTTP          | NBA Stats                                    |
| Génération d’images    | QR Code                                      |
| Modularité du code     | Tous                                         |
| Manipulation de texte  | Email Formatter, Chat                        |
| Logique conditionnelle | Hangman, Login, Chat                         |
| Git & GitHub Workflow  | Tous                                         |
| Python / JS / APIs     | Maîtrise d’outils concrets                   |
| Web Backend            | Expérience avec Flask, FastAPI               |
| Frontend               | Jinja2, React, HTML/CSS                      |
| Structuration          | Projet = README + structure propre           |
| Bases de données       | SQLite + SQLAlchemy                          |
| Communication          | Capacité à documenter & expliquer            |

---

Bonne chance Joss 💪🚀
Tu as 1 mois pour tous les finaliser, amuse-toi et applique-toi !


