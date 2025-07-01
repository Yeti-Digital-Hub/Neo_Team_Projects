# 🗂️ Dossier Personnel de Alex

Tous les projets présents dans ce dossier sont des **initiatives personnelles** dans le cadre de son évolution technique au sein de la team **Neo**.

---

## ⏳ Objectif global

Chaque projet doit être **conçu, développé, testé et finalisé** en **exactement 1 mois**, ni plus, ni moins.  
Ce rythme soutenu vise à :

- Renforcer la rigueur de travail
- Stimuler la logique et la créativité technique
- Se constituer un portfolio de projets terminaux puissants
- Explorer rapidement plusieurs modules Python utiles

---

## 📁 Structure du dossier

Chaque projet d’Alex est rangé dans un **sous-dossier propre**, avec l’obligation d’intégrer un fichier `README.md` complet expliquant :

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
git checkout -b Neo_team_projets/Alex/Nom_du_projet
```

3. Créer un dossier dans :

```
Neo_team_projets/Alex/Nom_du_projet/
```

4. Travailler à l'intérieur :

- Scripts Python
- README.md
- Ressources (JSON, .txt, etc)

5. Ajouter, committer et push :

```bash
git add .
git commit -m "Initialisation du projet Nom_du_projet"
git push origin Neo_team_projets/Alex/Nom_du_projet
```

6. Depuis GitHub, créer une **Pull Request** pour demander à fusionner ta branche vers `main`.

---

## 📦 Projets prévus

| Nom du projet           | Thématique  Pierre_Papier_Ciseaux                   | Délai imparti | Langages                      | Dossier                                              |
| ----------------------- | ------------------------------ | ------------- | ----------------------------- | ---------------------------------------------------- |
| `Pierre_Papier_Ciseaux` | Jeu simple / Logique           | /             | Python                        | `Neo_team_projets/Alex/Pierre_Papier_Ciseaux/`       |
| `Password_Generator`    | Terminal / Sécurité            | /             | Python                        | `Neo_team_projets/Alex/Password_Generator/`          |
| `Email_Sender`          | Automatisation / Messagerie    | /             | Python (smtplib)              | `Neo_team_projets/Alex/Email_Sender/`                |
| `To_Do_List`            | Application CRUD / Terminal    | /             | Python                        | `Neo_team_projets/Alex/To_Do_List/`                  |
| `User_Login_System`     | Authentification / Sécurité    | /             | Python                        | `Neo_team_projets/Alex/User_Login_System/`           |
| `YT_Video_Downloader`   | Téléchargement / Terminal      | /             | Python (`pytube`)             | `Neo_team_projets/Alex/YT_Video_Downloader/`         |
| `Terminal_Chat`         | Simulateur de discussion       | /             | Python                        | `Neo_team_projets/Alex/Terminal_Chat/`               |
| `REST_API_JSON_Local`   | Simulation API / Backend local | 1 mois        | Python                        | `Neo_team_projets/Alex/REST_API_JSON_Local/`         |
| `Appli_Flask`           | Web / Framework Flask          | 1 mois        | Python (Flask, Jinja, SQLite) | `Neo_team_projets/Joss/Appli_Flask_Gestion_Contact/` |

---

# 📂 Liste des mini projets à réaliser

### 1. Pierre, Papier, Ciseaux

**Objectif** : Cree un jeu interactif simple permettant de jouer contre l’ordinateur (logique conditionnelle).

**Technos utilisées** : Python, `random`, boucles, conditions.

📁 Dossier : `Neo_team_projets/Alex/Pierre_Papier_Ciseaux/`

---

### 2. Password Generator

**Objectif** : Génère des mots de passe sécurisés et aléatoires avec des options (longueur, caractères spéciaux, etc.).

**Technos utilisées** : Python, `random`, `string`, terminal.

📁 Dossier : `Neo_team_projets/Alex/Password_Generator/`

---

### 3. Email Sender

**Objectif** : Automatise l’envoi de mails via le terminal (avec ou sans pièce jointe).

**Technos utilisées** : Python, `smtplib`, `email.message`, terminal sécurisé.

📁 Dossier : `Neo_team_projets/Alex/Email_Sender/`

---

### 4. To-Do List

**Objectif** : Génère une liste de tâches depuis le terminal (ajout, suppression, mise à jour, marquage terminé).

**Technos utilisées** : Python, CRUD local avec fichiers `.txt` ou `.json`.

📁 Dossier : `Neo_team_projets/Alex/To_Do_List/`

---

### 5. User Login System _(projet commun avec Joss)_

**Objectif** : Système d’authentification avec enregistrement, hachage des mots de passe, connexion.

**Technos utilisées** : Python, `hashlib`, fichiers, logique de session.

📁 Dossier : `Neo_team_projets/Alex/User_Login_System/`

---

### 6. YouTube Video Downloader

**Objectif** : Telecharge des vidéos YouTube via un lien, avec choix de résolution.

**Technos utilisées** : Python, `pytube`, gestion d’entrée utilisateur.

📁 Dossier : `Neo_team_projets/Alex/YT_Video_Downloader/`

---

### 7. Terminal Chat _(projet commun avec Joss)_

**Objectif** : Simulez une messagerie terminale locale (échange en différé ou en temps réel via fichier partagé).

**Technos utilisées** : Python, `os`, lecture/écriture fichiers, timestamps.

📁 Dossier : `Neo_team_projets/Alex/Terminal_Chat/`

---

### 8. REST API Simulation with JSON

**Objectif** : Simule une API CRUD locale (GET, POST, PUT, DELETE) avec des fichiers `.json` au lieu de base de données.

**Technos utilisées** : Python, architecture en modules, `json`, séparation logique métier.

📁 Dossier : `Neo_team_projets/Alex/REST_API_JSON_Local/`

---

### 9. Appli Flask - Gestion de Contacts _(niveau avancé)_

**Objectif** : Créer une application web simple avec Flask pour gérer des contacts (CRUD + interface utilisateur) en suivant ce lien https://youtu.be/mZKOEvbGGwQ?si=IlgxXx4y2zm-WOgU.

**Technos utilisées** : Python, Flask, Jinja2, SQLite, HTML.

📁 Dossier : `Neo_team_projets/Joss/Appli_Flask_Gestion_Contact/`
(_Projet proposé comme objectif à atteindre via les projets terminaux._)

---

## 📚 Détail sur le projet principal : Application Flask de Gestion de Contacts

Ce projet consiste à suivre et reproduire intégralement le tutoriel "Flask (Français) - reproduisant fidèlement le tutoriel de _L'informatique de Wetchitse (https://youtu.be/mZKOEvbGGwQ?si=IlgxXx4y2zm-WOgU)_.

**⏳ Objectif global**

Développer une application web fonctionnelle avec gestion des utilisateurs et contacts (CRUD), en suivant les bonnes pratiques de Flask.  
Ce projet a pour but de :

- Maîtriser le framework **Flask**
- Comprendre l’architecture MVC (Modèle-Vue-Contrôleur)
- Travailler avec des **bases de données SQL** et SQLAlchemy
- Mettre en pratique l'authentification, le CRUD et les templates Jinja2
- Renforcer l’autonomie dans le développement backend

📅 **Durée allouée : 1 mois** (objectif à respecter strictement)

---

**🎯 Objectif pédagogiques du projet**

Développer une application web de gestion de contacts avec les fonctionnalités suivantes :

- Inscription / Connexion / Déconnexion
- Création, édition, suppression de contacts personnels
- Affichage de tous ses contacts dans une interface claire
- Protection des routes selon l’état de connexion
- Interface HTML/CSS avec templates Jinja2

---

**🧰 Technologies a utilisées**

| Outil / Librairie | Utilité principale              |
| ----------------- | ------------------------------- |
| `Python`          | Langage principal               |
| `Flask`           | Framework backend micro web     |
| `Jinja2`          | Moteur de templates HTML        |
| `Flask-Login`     | Authentification et sessions    |
| `Flask-WTF`       | Formulaires sécurisés           |
| `SQLAlchemy`      | ORM pour base de données        |
| `PostgreSQL`      | Base de données relationnelle   |
| `Werkzeug`        | Sécurité (hash de mot de passe) |
| `Bootstrap`       | Mise en forme du frontend       |

⚠️ Ce projet doit reproduire fidèlement le contenu du tutoriel et être réalisé en 1 mois maximum.

---

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

### 👤 Auteur : Alex

📅 Début du projet : 3 juin 2025

📅 Date limite : 3 juillet 2025

🧑‍🏫 Suivi par : [Mentor_ GuruMiT]

---

Bon courage Alex !
Ce projet est ton tremplin vers le développement web. Prends du plaisir à coder, reste rigoureux et documente bien chaque étape.
