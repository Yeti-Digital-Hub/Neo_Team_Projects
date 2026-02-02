# Projet Principal : Création d'une application web de gestion de cantine universitaire...

## 🎯 Objectif Principale: 
    C'est application web qui digitalise les processus métiers d'une cantine universitaire : Cas de l'ESIGn 

## 🖥️ Environnement de travail
    Linux: Ubuntu

## 🧠 Technologies utilisées

    - HTML
    - CSS
    - BOOTSTRAP 5
    - PHP
    - SQL
    - SVG(Pour les icons)
    - PHPMailer
    - Composer (pour installation de PHPMailer)

## 🟢 Design pattern utilisé
    MVC (Model View Controller)

## 📋 Product backlog

| ID   | Type d’élément du Backlog | Description                                                                                                      | Priorité | Estimation |
|------|----------------------------|------------------------------------------------------------------------------------------------------------------|----------|------------|
| <span style="color:#00FFFF">SP1</span>  | <span style="color:#00FFFF">Spike</span>                     | Étude et définition de l’architecture globale de l’application (MVC).           | Haute    | 1 jour    |
| <span style="color:#00FFFF">SP2</span>  | <span style="color:#00FFFF">Spike</span>                     | En tant que développeur je dois exploirer et concevoir des interfaces utilisateurs intuitives et ergonomiques (UI/UX) pour l'application, afin d'assurer une expérience utilisateur positive.                                  | Haute    | 3 jours    |
| <span style="color:#00FFFF">SP3</span> | <span style="color:#00FFFF">Spike</span> | Recherche et mise en place d’une architecture API REST pour les paiemments | Moyenne |  2 jours |
| <span style="color:#00FFFF">SP4</span> | <span style="color:#00FFFF">Spike</span> | Étude et configuration d’un environnement PayPal Sandbox : génération des clés, tests de transaction, intégration PHP. | Basse | 1 jour |
| <span style="color:#FFD700">US1</span>  | <span style="color:#FFD700">User Story</span>                | En tant qu’étudiant, je veux créer un compte et me connecter afin d’accéder à mon espace personnel.              | Haute    | 1.5 jours    |
| <span style="color:#FFD700">US2</span>  | <span style="color:#FFD700">User Story</span>                | En tant qu’étudiant, je veux accéder à mon tableau de bord pour voir mes informations et tickets.                | Haute    | 2 jours    |
| <span style="color:#FFD700">US3</span>  | <span style="color:#FFD700">User Story</span>                | En tant qu’étudiant, je veux acheter un ticket via la plateforme pour éviter les files d’attente.               | Haute    | 2 jours    |
| <span style="color:#FFD700">US4</span>  | <span style="color:#FFD700">User Story</span>                | En tant qu’étudiant, je veux recevoir un ticket PDF contenant un QR Code unique et pouvoir connaître mon rang dans la file afin d'aller récupérer mon repas sans traquqcerie.                                | Haute    | 2 jours    |
| <span style="color:#FFD700">US5</span>  | <span style="color:#FFD700">User Story</span>                | En tant membre de l'adminstration de la cantine, je veux me connecter afin d’accéder à l'espace réserver à l'administration de la cantine.              | Haute    | 1.5 jours    |
| <span style="color:#FFD700">US6</span>  | <span style="color:#FFD700">User Story</span>                | En tant qu’agent de la cantine, je veux scanner et valider un ticket facilement dans l'ordre pour fluidifier le service.                   | Haute    | 4 jours    |
| <span style="color:#FFD700">US7</span>  | <span style="color:#FFD700">User Story</span>                | En tant qu’étudiant, je veux consulter l’historique et le statut (utilisé / non utilisé) de mes tickets.       | Moyenne  | 2 jours    |
| <span style="color:#FFD700">US8</span>  | <span style="color:#FFD700">User Story</span>                | En tant qu’admin, je veux un tableau de bord pour voir les statistiques des tickets et validations.             | Moyenne  | 2 jours    |

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
    3. Installation des dépendances :
        - Composer : 
            *taper la commande : 
                sudo apt update
                sudo apt install composer -y
            *Initialiser le projet : 
                composer init
        -PHPMailer : 
            *taper la commande(Etant dans : /var/www/html/Neo_Team_Projects/Pouakam/Projet_Final_2025$) : 
                composer require phpmailer/phpmailer

## 📦 Importation de la base de données MySQL

    allez sur votre SGBD et importer le fichier app/config/resto_esign_db.sql

## Configurations
    Allez dans le fichier (app/config/function_project.php) et personaliser ceci 

    SMTP_HOST=smtp.gmail.com
    SMTP_PORT=587
    SMTP_USER=example@gmail.com // ton adresse email
    SMTP_PASS=motdepasse // mot de passe d'application

## 🚀 Utilisation
    NB: Rassurer vous d'être connecter à internet pour que l'envoi du mail(Gmail) fonctionne
    Ouvre ton navigateur et tape : http://localhost/Neo_Team_Projects/Pouakam/Projet_Final_2025/public/

## 🤝 Contributeurs

    🙋‍♀️ Auteur : Pouakam Brele Vanelle   Backend (Pseudo GitHub)
    
    🧑‍🏫 Suivi par : \[Mentor\_ GuruMiT]

---
