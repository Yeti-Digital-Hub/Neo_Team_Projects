# Projet 1 : Formulaire de contact... 

C'est un système simple (**Formulaire de Contact**) qui permettra aux utilisateurs ou visiteurs de pouvoir contacter le propriétaire ou administrateur d'un site internet.

## 🚀 Fonctionnalités...

- ✅ Afficher un formulaire permettant aux visiteurs de remplir leurs informations via des champs (Nom, email, numero, message).
- ✅ Envoyer ses informations remplis dans la base de donnée(fichier JSON) du site internet.
- ✅  Signaler l'admin du site internet via son email (ici on va utiliser un simulateur de serveur de messagerie) à chaque fois qu'un visiteur soumis le formulaire.
- ✅  Afficher les messages de chaque utilisateur dans une interface admin.

## 🧰 Méthodoligie de gestion de projet utilisées...

Puisque le projet n'était pas clair au début pour nous, nous avons opté pour la méthode scrum avec une approche agile.

## 🧰 Technologies utilisées...

- HTML
- CSS
- La Biliothèque bootstrap-icons(qui nous permettra d'inserer des icones)
- PHP
- Format JSON (Pour le stockage des données du systèmes)
- Git/GitHub (Pour le versionning)
- MailHog (Serveur de simulation d'envoi d'emails, qui sera utiliser pour simuler un signal d'envoi d'email à l'admin de système.)

## Paradigmes utilisés...

Nous utiliserons le paradigme procédurale (Tout ceci en structurant notre travail avec de la programmation modulaire).

## 🗂️ Structure des dossier du Projet(**Formulaire de Contact**)...

Voici comment nous avons structuré les dossiers du projet :

```
├── /**Formulaire_Contact**
│   ├── assets/
│   │    ├── style/
│   │    │     └── style.css
│   │    ├── icons/
│   │    └──     └── bootstrap-icons.css
│   ├── data/
│   │    └── dataBase.json
│   ├── includes/
│   │    └── ... 
│   ├── maquettes/
│   │    ├── maquette_admin_dashboard.png
│   │    ├── maquette_logique.png 
│   │    └── Maquette_UI.png    
│   ├── index.php 
│   ├── README.md
│ 
```