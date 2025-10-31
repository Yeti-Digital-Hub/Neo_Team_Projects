# Projet Principal : Création d'un Forum Web...

## 🎯 Objectif Principale: 
    
    C'est une mini plateforme de forum web permettant à tout utilisateur inscrit ou authenfier de pouvoir créer un lieu de discussion où il pourra: Publier, Répondre, Modifier, Supprmier et accéder à des questions d'un forum web.

## 🖥️ Environnement de travail
    Linux: Ubuntu

## ⚙️ Fonctionnalités

    - ✅ Inscription/Authentification/Déconnexion
    - ✅ Recherche des questions sur forum
    - ✅ Affichage des questions du forum
    - ✅ Ajouter, Supprimer et Modifier une question
    - ✅ Consulter une quetion du forum
    - ✅ Répondre à une qestion du forum
    - ✅ Voir le profil d'un membre du forum

## 🧠 Technologies utilisées

    - HTML
    - CSS
    - BOOTSTRAP 5
    - PHP
    - SQL
    - Bibliothèque fontawersome(Pour les icons)

## 🟢 Paradigme utilisé
    Paradigme Procédurale

## 🌀 Méthodologie  de travail
        La méthode Scrum

## 📋 Product backlog


| ID  | Type d’élément du Backlog | Description | Priorité (Haute/Moyenne/Basse) | Estimation ( Heures) |
|-----|---------------------------|-------------|--------------------------------|------------------------------------|
| 1   | Epic | En tant que utilisateur je doit pouvoir m'incrit et me connecter afin de pouvoir accéder au forum  | Haute| 3h|
| 2   |Epic| En tant utilisateur connecter sur forum je doit être capable de publier, de modifier et de supprimer des questions afin de reçevoir des réponces des membres du forum| Haute| 3h|
| 3   | User Story| En tant que utilisateur je veux consulter le profil d'un utilisateur du forum afin de pouvoir voir ses publications| Haute| 3h|
| 4   | Epic| En tant que utilisateur je veux rechercher et afficher tous les questions publiées dans le forum afin d'apporter une réponce| Haute| 3h|
| 5   | User Story| En tant que utilisateur je veux répondre aux questions publiées dans le forum afin d'aider les autres utilisateurs| Haute| 3h|
| 6   | User Story| En que utilisateur je veux pouvoir me déconnecter au forum afin de ne plus avoir accès pour une période| Moyenne| 3h|
---


## 🗂️ Structure des dossier du Projet(**Forum Web**)...

        ```
        ├── Forum_Web/
        |       actions
        |   |    ├── questions/
        |   |    │        ├── delete_question_actions.php
        |   │    |        ├── edit_question_action.php
        |   |    │        ├── get_info_of_edited_question.php
        |   |    │        ├── my__questions_action.php
        |   |    │        ├── head.php
        |   |    │        ├── post_answer_action.php
        |   |    │        ├── publish__question_action.php
        |   |    │        ├── show_all_answer_of_question.php
        |   |    │        ├── show_all_questions_action.php
        |   |    │        └── show_content_question_action.php
        |   |    ├── users/
        |   |    │        ├── login_action.php
        |   |    │        ├── logout_action.php
        |   |    │        ├── security_action.php
        |   |    │        └── sign_up_action.php
        |   |    └── data_base.php
        │   ├── assets/
        │   │     ├── bootstrap/ dossier de configuration bootstrap 5.3
        │   │     ├── icons/ dossiers des icons fontAwersome
        │   │     └── style.css
        │   ├── config/
        │   │     ├── config.example.php
        │   │     └── config.php
        │   ├── data_base.sql/
        │   │     └── forum.sql
        │   ├── includes/
        │   │    ├── head.php
        │   │    └── nav_bar.php.php  
        │   ├── content_question.php
        │   ├── edit_question.php
        │   ├── index.php
        │   ├── login.php
        │   ├── my_questions.php
        │   ├── profile.php
        │   ├── publish_question.php
        │   ├── README.md
        │   
        ```

## 📦 Installation du projet

    1. Installer un serveur web local php en fonction de votre environnement(WAMP, LAMP, XAMP, MAMP)

    2. cloner le repo :
        - Sur Linux
            *Ouvir le terminal et taper :
                ```
                cd /var/www/html
                ```
            * Puis taper
                ```
                git clone https://github.com/Yeti-Digital-Hub/Neo_Team_Projects.git
                ```
        - Windows

## 📦 Importation de la base de données MySQL

        Cette procédure permet à tout personne voulant exécuter le project d'importer la base  de donnée du projet :
            1- Sur Linux(LAMP):
                a- Créer une base vide dans MySQL 
                    -  Lancer mysql : sudo systemctl start mysql
                    -  Tapez : CREATE DATABASE forum CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
     
                b- Importer le fichier forum.sql dans cette base
                    - Dans ton terminal (pas dans MySQL, mais dans ton système), va dans ton projet et tape : mysql -u root -p forum < data_base_sql/forum.sql (" Au niveau de [-u root], vous allez laisser [root] ssi votre username mysql est [root] dans le cas contraire vous le remplasserez par votre username mysql")
                c- Configurer la connexion à la base 
                    - Ouvrir le fichier 'config.example.php' qui est dans le dossier 'config'
                    - A l'intérieur de ce fichier Modifier si necesaire les variable $username et $password avec vos identifiants MySQL
                    - Et enfin renommer le fichier config.example.php en config.php

            2- Sur Windows (XAMP):
                a- Créer une base vide dans MySQL 
                    -  Lancer le serveur mysql de Wamp et ourir le navigateur et taper : http://localhost/phpmyadmin/
                    -  Allez dans l'option sql pour creer une base de données en saississant : CREATE DATABASE forum CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
                b- Importer le fichier forum.sql dans cette base
                    - Dans ton invite commande, va dans ton projet(Forum_Web) et tape : "C:\xampp\mysql\bin\mysql.exe" -u root -p forum < data_base_sql\forum.sql
                c- Configurer la connexion à la base 
                    - Ouvrir le fichier 'config.example.php' qui est dans le dossier 'config'
                    - A l'intérieur de ce fichier Modifier si necesaire les variable $username et $password avec vos identifiants MySQL
                    - Et enfin renommer le fichier config.example.php en config.php


## 🚀 Utilisation
    
        NB: Rassurer vous d'être connecter à internet afin de pouvoir afficher les textes avec les police Google fonts

    1- Ouvrir votre navigateur et taper : `http://localhost/http://localhost/Neo_Team_Projects/Pouakam/Forum_Web/index.php` pour accéder à la page d'acceuil du forum, où tu peux visualiser les questions du forum.

    2- Créer un compte / Se connecter
        Si vous êtes un nouvel utilisateur, clique sur le button sign-in et remplis le formulaire avec ton pseudo et ton mot de passe. Pour les nouveau utilisateur cliquer d'abord sur sign-in puis dans le formulaire qui s'affiche cliquer sur Je n'ai pas de compte, je m'inscis pour créer un compte.

    3- Lire les différentes questions du forum 
        Une fois ue c'est fait(sign-up ou sign-in) vous accèderez à la page d'acceuil qui contient le question du forum 

    4- Poster une question
        Cliquez sur la navbar l'option add question et Remplis le titre, le description et le contenu de ta question, puis clique sur Post.

    5- Répondre à une question
        Ouvre la question auquel tu souhaites répondre, clique va dans le champ answer, écris ta reponse et clique sur send.

    6- Modifier ou supprimer une question
        Tu peux modifier ou supprimer uniquement tes propres questions en allant dans l'option My questions de la navbar, puis pour supprimer tu clique sur le button delete question (rouge) de la question et pour modifier cliquer sur le button edit a question 
    7- Voir votre profil
        Pour accéder à votre profil cliquez dans l'option My profil de la navbar

    8- Se déconnecter
        Une fois terminé, clique sur Logout dans votre navbar pour vous déconnectez.


## 🤝 Contributeurs

    🙋‍♀️ Auteur : Pouakam Brele Vanelle   Backend (Pseudo GitHub)
    
    🧑‍🏫 Suivi par : \[Mentor\_ GuruMiT]

---