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
    
    4. Installation de mhsendmail
        - Sur Linux(Ubuntu)
            * Télécharger mhsendmail
                ```
                wget https://github.com/mailhog/mhsendmail/releases/download/v0.2.0/mhsendmail_linux_amd64 -O mhsendmail
                ```
            * Rendre exécutable
                ```
                chmod +x mhsendmail
                ```
            * Déplacer mhsendmail dans un dossier accessible
                ```
                sudo mv mhsendmail /usr/local/bin/mhsendmail
                ```
            * Configurer PHP pour utiliser mhsendmail
                ```
                sudo nano /etc/php/7.x/apache2/php.ini
                ```
            * Cherche la ligne sendmail_path et modifie là par :
                ```
                sendmail_path = /usr/local/bin/mhsendmail
                ```
            * Redémarre Apache
                ```
                sudo systemctl restart pache2
                ```
        -Sur Windows
            * Aller sur la page des releases de mhsendmail
            * Télécharger le fichier mhsendmail_windows_amd64.exe
            * Renommer en mhsendmail.exe
            * Placer mhsendmail.exe dans un dossier
                ``Markdown All in One`
                C:\mhsendmail\
                ```
            * Ouvrer le fichier php.ini utilisé par WAMP
                ```
                C:\wamp64\bin\php\phpX.X.X\php.ini
                ```
            * Chercher la ligne sendmail_path et modifier par :
                ```
                sendmail_path = "C:\mhsendmail\mhsendmail.exe -smtp=localhost:1025"
                ```
            * Redémarre les services WAMP

## 🚀 Utilisation

    - Sur Windows taper la commande si dan le terminale : cd C:\MailHog 
    et sur Ubuntu plutôt ceci : cd C:\MailHog. Pour lancer Mailhog
    - Ouvrir votre navigateur et taper : `http://localhost/http://localhost/Neo_Team_Projects/Pouakam/Formulaire_Contact/index.php`
    - taper ausi : http://localhost:8025 pour accéder à l'interface de MailHog
    - Remplissez le formulaire avec : Nom, l'email, Le Numéro de téléphone et Message
    - Cliquez sur **Send a message**
    - Aller dans l'interface de MailHog pour voir le message envoyer
    - Taper : `http://localhost/http://localhost/Neo_Team_Projects/Pouakam/Formulaire_Contact/admin.php` pour consulter lapage admin
    - Consulter le fichier Json(**data/dataBase.json**) pour voir vos données stocker

## 🤝 Contributeurs

    🙋‍♀️ Auteur : Pouakam Brele Vanelle   Backend (Pseudo GitHub)
    
    🧑‍🏫 Suivi par : \[Mentor\_ GuruMiT]

---