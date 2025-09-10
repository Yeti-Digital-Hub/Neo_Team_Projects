# 📧 Email Sender

---

## 🚀 Objectif

Ce projet permet d’automatiser l’envoi d’e-mails (avec ou sans pièces jointes) via un script Python en ligne de commande.  
L’utilisateur saisit l’adresse de l’expéditeur, du destinataire, le sujet, le message et peut ajouter une ou plusieurs pièces jointes.

---

## 🛠️ Technologies utilisées

- **Python 3**
- Module standard : `smtplib` (envoi SMTP)
- Module standard : `email.message` (construction du mail)
- Module standard : `mimetypes` (gestion des types de fichiers)
- Module standard : `pathlib` (gestion des chemins de fichiers)
- Serveur SMTP Gmail (`smtp.gmail.com`)

---

## ⚙️ Utilisation

1. **Ouvre un terminal** dans le dossier `Email_Sender`.
2. **Lance le script** avec :
   ```bash
   python Email_Sender.py
   ```
3. **Saisis les informations demandées** :
   - Email de l’expéditeur
   - Email du destinataire
   - Sujet
   - Message
   - Chemin(s) des fichiers à joindre (appuie sur Entrée pour terminer)

4. **Le script ajoute chaque pièce jointe** (si le chemin est valide) et envoie l’e-mail via le serveur SMTP de Gmail.

---

## 🔐 Sécurité

> **Important** :  
> Pour utiliser ce script avec Gmail, tu dois générer un **mot de passe d’application** (Google, sécurité, validation en deux étapes activée).  
> Remplace la chaîne `"lisihqualczmerfd"` dans le code par ton mot de passe d’application personnel.

---

## 📦 Fonctionnalités

- Envoi d’e-mails simples ou avec plusieurs pièces jointes
- Vérification de l’existence des fichiers joints
- Gestion automatique des types MIME (Multipurpose Internet Mail Extensions)
- Affichage d’un message de confirmation ou d’erreur pour chaque pièce jointe

---

## 👤 Auteur

- **Alex**
- 📅 Début du projet : 3 juin 2025
- 📅 Date limite : 21 août 2025
- 🧑‍🏫 Suivi par : [Mentor_GuruMiT]

---

## 📝 Exemple d’utilisation

```
Sender Email: monadresse@gmail.com
Receiver Email: destinataire@gmail.com
Subject: Test Email
Message: Bonjour, ceci est un test avec pièce jointe.
Chemin du fichier à joindre (Entrée pour terminer) : /chemin/vers/fichier.pdf
Chemin du fichier à joindre (Entrée pour terminer) : 
✔️ Pièce jointe ajoutée : fichier.pdf
The Email has been sent to destinataire@gmail.com
```

---




