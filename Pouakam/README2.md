
# 🗂️ Dossier Personnel 

Tous les projets présents dans ce dossier sont des **initiatives personnelles** dans le cadre de ton évolution technique au sein de la team **Neo**.

---

## ⏳ Objectif global

Chaque projet doit être **conçu, développé, testé et finalisé** en **exactement 1 mois**, ni plus, ni moins.  
Ce rythme soutenu vise à :

- Renforcer la rigueur de travail  
- Stimuler la logique et la créativité technique  
- Se constituer un portfolio de projets terminaux puissants  
- Explorer rapidement plusieurs modules PHP utiles  

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
   git checkout -b Neo_team_projets/Pouakam/Nom_du_projet
   ```

3. Créer un dossier dans :

   ```
   Neo_team_projets/Pouakam/Nom_du_projet/
   ```

4. Travailler à l'intérieur :

   * Scripts
   * README.md
   * Ressources (JSON, .txt, etc)

5. Ajouter, committer et push :

   ```bash
   git add .
   git commit -m "Initialisation du projet Nom_du_projet"
   git push origin Neo_team_projets/Pouakam/Nom_du_projet
   ```

6. Depuis GitHub, créer une **Pull Request** pour demander à fusionner ta branche vers `main`.

---

# 📁 Structure du dossier

Chaque projet de Pouakam est rangé dans un **sous-dossier propre**, avec l’obligation d’intégrer un fichier `README.md` complet expliquant :

- 🎯 L’objectif du projet  
- 🧰 Les technologies utilisées  
- 🛠️ Les instructions pour exécuter le projet  
- 👤 Les membres impliqués  

---

# 📦 Projets terminaux à réaliser

| Nom du Projet             | Objectif                                                             | Délai Imparti | Langages Utilisés   | Dossier Local                                       |
| ------------------------- | -------------------------------------------------------------------- | ------------- | ------------------- | --------------------------------------------------- |
| `Formulaire_Contact`      | Création d’un formulaire simple en PHP avec validation               | /             | PHP, HTML/CSS       | `Neo_team_projets/Pouakam/Formulaire_Contact/`      |
| `Authentification_Simple` | Gestion d’un système login/logout minimal en PHP                     | /             | PHP, HTML/CSS       | `Neo_team_projets/Pouakam/Authentification_Simple/` |
| `Blog_PHP_Dynamique`      | Blog simple avec création dynamique de posts                         | /             | PHP, JSON, HTML/CSS | `Neo_team_projets/Pouakam/Blog_PHP_Dynamique/`      |
| `Todo_List_Txt`           | Application en ligne de commande avec fichiers `.txt`                | /             | PHP, HTML/CSS       | `Neo_team_projets/Pouakam/Todo_List_Txt/`           |
| `Generateur_Mot_de_Passe` | Générateur de mots de passe sécurisés avec options personnalisables  | /             | PHP, HTML/CSS       | `Neo_team_projets/Pouakam/Generateur_Mot_de_Passe/` |
| `Questionnaire_Quiz`      | Quiz simple en ligne ou en terminal avec notation finale automatique | /             | Python ou PHP       | `Neo_team_projets/Pouakam/Questionnaire_Quiz/`      |
| `Forum Web`               | Mise en oeuvre d'une replique de forum web basé sur le PHP CSS HTML ET SQL | /       | Python ou PHP       | `Neo_team_projets/Pouakam/Forum_web/`            |

---

### 🚀 Projet principal : **Creation d'un forum Web**

#### 🎯 Objectif :

L'objectif principal de ce projet  est de t'apprendre à **créer un forum web complet de A à Z en utilisant PHP et MySQL** 
Reproduire **fidèlement** le projet présenté dans cette vidéo tutorielle :

📺 [ Créer un Forum complet de A à Z en PHP & MySQL](https://youtu.be/nu2m9HaeVV4?si=EWXSmZ6nDaUUobmD)
👉 Chaîne : *FrenchCoder - Développement Web*

#### 📌 Compétences ciblées :

## 1. Objectif Global du Projet

En reproduisant ce projet, vous développerez un forum capable de gérer les éléments suivants :
*   Un **système d'inscription** pour les nouveaux utilisateurs.
*   Un **système de connexion** pour authentifier les utilisateurs.
*   La possibilité pour les utilisateurs connectés de **publier une question**.
*   La capacité pour d'autres utilisateurs de **répondre à ces questions**.
*   La fonctionnalité de **modifier une question** publiée.
*   La possibilité de **supprimer une question**.
*   Un **système de recherche** pour trouver et afficher les questions existantes sur le site.
*   L'affichage du **profil d'un utilisateur** avec toutes ses publications (questions).
*   La visualisation du **contenu détaillé** de chaque question.
*   L'affichage des **réponses** associées à une question.

## 2. Objectifs Pédagogiques

Pour suivre ce tutoriel, tu devra **avoir les bases en PHP et MySQL**, ainsi qu'en **HTML**.

Au terme de cette formation, vous serez capable de :
*   **Appliquer concrètement vos connaissances** en PHP et MySQL à travers la réalisation de projets .
*   Comprendre et mettre en œuvre une **architecture de projet simple et organisée** pour séparer le code PHP du code HTML .
*   Maîtriser les **opérations CRUD (Création, Lecture, Mise à jour, Suppression)** de données avec PHP et MySQL.
*   Gérer l'**authentification et les sessions utilisateur** pour maintenir l'état de connexion.
*   Appliquer des **bonnes pratiques de codage**, notamment en nommant les variables et fonctions en anglais.
*   Utiliser des fonctions PHP pour la **sécurité (HTMLspecialchars)** et la manipulation de texte (`nl2br`, `str_replace`).
*   Mettre en place des **requêtes SQL complexes**, notamment pour la recherche (`LIKE` avec des jokers).
*   Développer un site web avec un **design réactif** grâce à un framework CSS comme Bootstrap.

Il est crucial de **pratiquer constamment** pour maîtriser les concepts abordés et progresser dans le développement web.

## 3. Technologies et Outils Utilisés

Pour reproduire ce forum, vous utiliserez les technologies et outils suivants :

*   **Langages de Programmation :**
    *   **PHP** : Langage de script côté serveur [1].
    *   **MySQL** : Système de gestion de base de données relationnelle [1].
    *   **HTML** : Langage de balisage pour la structure des pages web [1].
*   **Environnement de Développement :**
    *   Un serveur local : **MAMP** (pour Mac), **WAMP**, **XAMPP** ou **LAMP** (pour Windows/Linux) pour faire fonctionner Apache, MySQL et PHP [9].
*   **Frameworks et Librairies :**
    *   **Bootstrap** : Framework CSS pour le design et le responsive, fournissant des composants prêts à l'emploi.
*   **Classes et Fonctions PHP Spécifiques :**
    *   **PDO** : Extension PHP pour l'accès aux bases de données, utilisée pour les requêtes SQL.
    *   `session_start()` : Pour la gestion des sessions utilisateur.
    *   `HTMLspecialchars()` : Pour prévenir les attaques XSS en échappant les caractères spéciaux.
    *   `nl2br()` : Pour convertir les sauts de ligne en balises HTML `<br/>` lors de l'affichage du contenu.
    *   `str_replace()` : Pour remplacer des occurrences de chaînes de caractères (ex: enlever les balises `<br/>` lors de l'édition).
    *   `date()` : Pour gérer les dates de publication [8].
*   **Outils et Bonnes Pratiques :**
    *   **Emmet** : Extension pour générer rapidement du code HTML (via `! + Tab`).
    *   **Organisation du code :** Utilisation d'une architecture de dossiers (`action`, `includes`, `users`, `questions`) pour une meilleure séparation du code PHP et HTML.
    *   **Commentaires de code :** Il est fortement recommandé d'ajouter des commentaires pour une meilleure lisibilité et compréhension du code.

---
**Conseil Important :** Reproduit chaque ligne de code et chaque explication du tutoriel **fidèlement**. Ne saute aucune étape, car la compréhension de chaque composant est cruciale pour le fonctionnement global du forum et ton apprentissage. N'oublie pas de coder **uniquement en anglais** pour les noms de variables, fonctions et champs de base de données, c'est une pratique essentielle dans le développement web .


## 🗂️ À faire dans chaque projet

Dans le dossier de chaque projet, ajoute un fichier `README.md` avec les sections suivantes :

### 🔹 Objectif du projet

Explique ce que fait ton projet, en quelques phrases.

### 🔹 Technologies utilisées

Indique les bibliothèques ou outils que tu as utilisés.

### 🔹 Instructions d'exécution

Indique la commande pour exécuter ton script, par exemple :

```bash
php index.php
```

Et les prérequis s’il y en a (`composer install`, etc.).

### 👤 Auteur : Pouakam

📅 Début du projet : 5 juin 2025
📅 Date limite : 5 juillet 2025

🧑‍🏫 Suivi par : \[Mentor\_ GuruMiT]

---

💡 Bon courage Pouakam !
Ce programme est ton tremplin vers le développement web et logiciel. Reste régulier, documente bien, et n'oublie pas : **"Un projet terminé vaut plus que dix commencés."**
