# Projet 1 : Formulaire de contact... 


## 🎯 Objectif Principale:

C'est un système simple (**Formulaire de Contact**) qui permettra aux utilisateurs ou visiteurs de pouvoir contacter le propriétaire ou administrateur d'un site internet.

## 🖥️ Environnement de travail
    Linux: Ubuntu

## Fonctionnalités

- ✅ Afficher un formulaire permettant aux visiteurs de remplir leurs informations via des champs (Nom, email, numero, message).
- ✅ Envoyer ses informations remplis dans la base de donnée(fichier JSON) du site internet.
- ✅  Signaler l'admin du site internet via son email (ici on va utiliser un simulateur de serveur de messagerie) à chaque fois qu'un visiteur soumis le formulaire.
- ✅  Afficher les informations de chaque utilisateur dans une interface admin.


## 🧠 Technologies utilisées...

    - HTML
    - CSS
    - La Biliothèque bootstrap-icons(qui nous permettra d'inserer des icones)
    - PHP
    - Format JSON (Pour le stockage des données du systèmes)
    - Git/GitHub (Pour le versionning)
    - MailHog (Serveur de simulation d'envoi d'emails, qui sera utiliser pour simuler un signal d'envoi d'email à l'admin de système.)
    - Mhsendmail(Outil qui va permettre de transférer les mails envoyer par php à MailHog.)

## 🟢 Paradigmes utilisés...

    Nous utiliserons le paradigme procédurale (Tout ceci en structurant notre travail avec de la programmation modulaire).

## 🗂️ Structure des dossier du Projet(**Formulaire de Contact**)...

    Voici comment nous avons structuré les dossiers du projet :

        ```
        ├── Formulaire_Contact
        │   ├── assets/
        │   │    ├── icons/
        |   |    |       ├── fonts/
        │   │    ├──     └── bootstrap-icons.css
        │   │    └── maquettes/
        |   |            ├── maquette_logique.png 
        │   │            └── Maquette_UI.png
        │   ├── data/
        │   │    └── dataBase.json
        │   ├── files_style/
        │   │    ├── style-index.css
        │   │    └──  style-admin.css
        │   ├── includes/
        │   │    ├── file-function-project.php
        │   │    ├── send-email-admin.php
        │   │    └── traitement-data-form.php
        │   ├── admin.php     
        │   ├── index.php 
        │   ├── README.md
        │ 
        ```

## 📦 Installation

    1. Installer un serveur web local php en fonction de votre environnement(WAMP, LAMP, XAMP, MAMP)

    2. cloner le repo :
        - Sur Windows(WAMP)
            * Ouvir le terminal et taper :
                ```
                cd C:\wamp64\www
                ```
            * Puis taper
                ```
                git clone https://github.com/Yeti-Digital-Hub/Neo_Team_Projects.git
                ```
        - Sur Linux(LAMP)
            *Ouvir le terminal et taper :
                ```
                cd /var/www/html
                ```
            * Puis taper
                ```
                git clone https://github.com/Yeti-Digital-Hub/Neo_Team_Projects.git
                ```

    3. Installation de MailHog (Faux serveur SMTP)
        - Sur Windows 
            * Va ici : https://github.com/mailhog/MailHog/releases
            * Télécharge MailHog_windows_amd64.exe.
            * Renomme le fichier(.exe) en MailHog.exe, par exemple et place-le dans un dossier de votre choix
        - Sur Linux(Ubuntu): ouvrez le terminal et taper les commandes
            ```
            sudo apt update && sudo apt install golang-go -y
            go install github.com/mailhog/MailHog@latest
            ```
    
    4. Installation de mhsendmail (Outil pour envoyer les mail sur MailHog)
        - Sur Linux(LAMP)

            1- Installer mhsendmail
                -Télécharge et installe mhsendmail avec Go : go install github.com/mailhog/mhsendmail@latest
            2- Configurer PHP pour utiliser mhsendmail
                - Ouvre ton php.ini (selon ta version de PHP, par exemple PHP 8.3) en tapant : sudo nano //etc/php/8.3/apache2/php.ini
                - Trouve la ligne "sendmail_path" et configure : sendmail_path = "/home/<username>/go/bin/mhsendmail"
                    NB: Veuillez remplace <username> par ton nom d’utilisateur Linux.
            3- Redémarrer Apache:
                - sudo systemctl restart apache2

        -Sur Windows(WAMP)

            1- Télécharger mhsendmail : 
                - Ouvrez Votre navigateur et tapez (https://github.com/mailhog/mhsendmail/releases) GitHub de mhsendmail
                - Télécharge : mhsendmail_windows_amd64.exe. 

            2- Renommer et placer le fichier:
                - Renomme-le en : mhsendmail.exe
                - Place-le dans un dossier : C:\mhsendmail\

            3- Ouvrir le fichier php.ini : 
                - Ouvrir le l'invite de commande 
                - Taper : C:\wamp64\bin\php\php8.2.0\php.ini

            4- Configurer sendmail_path :
                - Cherche la ligne "sendmail_path" dans php.ini.
                - Modifie-la ainsi : sendmail_path = "C:\mhsendmail\mhsendmail.exe -smtp=localhost:1025"
            5- Redémarrer WAMP :
                - Clique sur l’icône WAMP (en bas à droite de Windows).
                - Clique sur Restart All Services. 

## 🚀 Utilisation

    - Lancer MailHog: 

        * sur windows : Ouvrez l'invite de commandes exécutez la commande : C:\MailHog\MailHog.exe. NB: C:\MailHog\: c’est le dossier où tu as placé l’exécutable.
        * Sur linux : ouvri le terminal et taper : ~/go/bin/MailHog

    - Ouvrir votre navigateur et taper : 

        `http://localhost/http://localhost/Neo_Team_Projects/Pouakam/Formulaire_Contact/index.php`

    - taper ausi : http://localhost:8025 pour accéder à l'interface de MailHog

    - Remplissez le formulaire avec : Nom, l'email, Le Numéro de téléphone et Message

    - Cliquez sur **Send a message**

    - Aller dans l'interface de MailHog pour voir le message envoyer

    - Taper : `http://localhost/http://localhost/Neo_Team_Projects/Pouakam/Formulaire_Contact/admin.php` pour consulter la page admin

    - Consulter le fichier Json(**data/dataBase.json**) pour voir vos données stocker

### Exigence (Uniquement pour Linux)
    Pour que les données soit  luent dans le fichier json (data/dataBase.json), veuillez d'abord donner tous les droits à votre fichier json en tapant la commande : chmod 777 /var/www/html/Neo_Team_Projects/Pouakam/data/dataBase.json


## 🤝 Contributeurs

    🙋‍♀️ Auteur : Pouakam Brele Vanelle   Backend (Pseudo GitHub)
    
    🧑‍🏫 Suivi par : \[Mentor\_ GuruMiT]

---