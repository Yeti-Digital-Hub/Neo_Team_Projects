# Projet 2 : Système d'authentification simple(Login, Logout et reset password)...


## 🎯 Objectif Principale

C'est un système d'**athentification simple** permettant à un utilisateur d'entrer son adresse email et son mot de passe valide afin de vérifier l'identiter de celui pour le connecter au système.

## 🚀 Fonctionnalités...

- ✅ Affiche un formulaire de login permettant à un utilisateur de remplir son adresse email et mot de passe valide afin de se connecter 
- ✅ Vérifie si les informations remplir correspondent à ceux en base de  donnée (Fichier JSON), si oui connecte l'utilisateur
- ✅ Demande de mot de passe oublier
- ✅ Possibilité de réinitialisation d'email

## 🧰 Méthodoligie de gestion de projet utilisées...

la méthode scrum avec une approche agile.

## 🧠 Technologies utilisées...

    - HTML
    - CSS
    - PHP
    - La librerie font Awersome(Qui nous permettra d'inserer des icones.)
    - Format JSON (Pour le stockage des données du systèmes.)
    - Git/GitHub (Pour le versionning.)
    - MailHog (Serveur de simulation d'envoi d'emails, qui sera utiliser pour simuler un signal d'envoi d'email à l'admin de système.)
    - PHPMailer (C'est une librerie php pou l'envoi des mail.)

## 🟢 Paradigmes utilisés...

    Nous utiliserons le paradigme procédurale (Tout ceci en structurant notre travail avec de la programmation modulaire).

## 🗂️ Structure des dossier du Projet(**Formulaire de Contact**)...

    Voici comment nous avons structuré les dossiers du projet :
        ```
        ├── System_Authentificator
        │   ├── assets/
        │   │    ├── icons/
        │   │    ├──     ├── css/
        |   |    |       ├──   └── all.min.css
        |   |    |       └── webfonts/
        │   │    └── maquettes/
        |   |            ├── forget-password.png
        |   |            ├── img-index.png
        |   |            ├── Logout.png
        │   │            └── reset-password.png
        │   ├── data/
        │   │    └── dataBase.json
        │   ├── files_style/
        │   │    └──  style.css
        │   ├── includes/
        │   │    ├── file-function-project.php
        │   │    ├── send-email.php
        │   │    └── traitement-form.php    
        │   ├── index.php 
        │   ├── README.md
        │ 
        ```

## 📦 Installation

    1. Installer un serveur web local php en fonction de votre environnement(WAMP, LAMP, XAMP, MAMP)

    2. cloner le repo :
        - Sur Windows
            * Ouvir le terminal et taper :
                ```
                cd C:\wamp64\www
                ```
            * Puis taper
                ```
                https://github.com/Yeti-Digital-Hub/Neo_Team_Projects.git
                ```
        - Sur Linux
            *Ouvir le terminal et taper :
                ```
                cd /var/www/html
                ```
            * Puis taper
                ```
                https://github.com/Yeti-Digital-Hub/Neo_Team_Projects.git
                ```

    3. Installation de MailHog (Faux serveur SMTP)
        - Sur Windows 
            * Va ici : https://github.com/mailhog/MailHog/releases
            * Télécharge MailHog_windows_amd64.exe.
            * Renomme en MailHog.exe et place-le dans un dossier
        - Sur Linux(Ubuntu)
            ```
            sudo apt install golang-go
            go install github.com/mailhog/MailHog@latest
            ```


## 🚀 Utilisation



## 🤝 Contributeurs

    🙋‍♀️ Auteur : Pouakam Brele Vanelle   Backend (Pseudo GitHub)
    
    🧑‍🏫 Suivi par : \[Mentor\_ GuruMiT]

---
