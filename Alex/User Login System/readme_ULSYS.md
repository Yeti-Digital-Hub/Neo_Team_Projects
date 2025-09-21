# 🔐 User Login System

---

## 🚀 Objectif

Ce projet implémente un système d'authentification local et sécurisé pour la gestion des comptes utilisateurs.
Il permet l'inscription, la connexion et la gestion simple d'une session, avec **hachage des mots de passe** pour éviter de stocker les mots de passe en clair.

---

## 🛠️ Technologies utilisées

* **Python 3**
* Modules standard :

  * `hashlib` (hachage SHA-256)
  * `json` (stockage des utilisateurs)
  * `os` (gestion des fichiers)
  * `getpass` (saisie masquée du mot de passe)
  * `time` / `datetime` (optionnel pour journaux)

---

## 📁 Organisation des fichiers

```
Neo_Team_Projects/
└── Alex/
    └── User_Login_System/
        ├── login.py      # script principal (inscription / connexion / chat)
        ├── users.json    # stockage des comptes (créé automatiquement)
        └── chat.txt      # historique du chat (optionnel, partagé avec Terminal_Chat)
        └── readme_ULSYS  # fichier readme du projet 
```

---

## ⚙️ Utilisation

1. **Ouvre un terminal** dans le dossier `User_Login_System`.
2. **Lance le script** :

   ```bash
   python login.py
   ```
3. **Choisis une action** :

   * `1` → Connexion (pseudo + mot de passe)
   * `2` → Inscription (crée un nouveau compte)
4. **Après authentification** :

   * Tu peux envoyer des messages vers `chat.txt` (si la version chat est intégrée)
   * Commande spéciale : `/all` → afficher l’historique complet du chat

---

## 🔐 Sécurité

* Les mots de passe sont **hachés avec SHA-256** avant d'être stockés dans `users.json`.
* **Limites** : SHA-256 seul n'est pas idéal pour stocker des mots de passe en production (manque de sel et d'itérations).
  Pour un déploiement réel, il est recommandé d'utiliser **bcrypt**, **Argon2** ou **scrypt** et d'ajouter un sel unique par utilisateur.
* Le fichier `users.json` contient des identifiants hachés ; protège l'accès au fichier (permissions OS) si utilisé en environnement partagé.

---

## 📦 Fonctionnalités

* Inscription avec pseudo + mot de passe (saisie masquée)
* Connexion avec vérification du mot de passe haché
* Stockage persistant des comptes dans `users.json`
* Intégration optionnelle avec `chat.txt` pour envoyer/recevoir des messages (même comportement que Terminal Chat)
* Script minimal, commenté et prêt à être étendu

---

## 👨‍💻 Bonnes pratiques à ajouter (suggestions)

* Utiliser `bcrypt`/`argon2` pour le hachage des mots de passe.
* Ajouter un sel unique et un paramètre d'itération.
* Implémenter un verrouillage d'accès au fichier (`fcntl` sur Unix, `msvcrt` sur Windows) pour éviter les corruptions lors d'écritures concurrentes.
* Ajouter des validations de pseudo/mot de passe (longueur minimale, caractères acceptés).
* Implémenter des logs et une gestion des erreurs plus robuste.

---

## 👤 Auteur

* **Alex**
* 📅 Début du projet : 17 septembre 2025
* 🧑‍🏫 Collaborateur(s) : Joss
* 🧑‍🏫 Suivi par : [Mentor_GuruMiT]

---

## 📝 Exemple d’utilisation

```
1. Connexion
2. Inscription
> 2
Choisis un pseudo > alex
Choisis un mot de passe > (saisi masqué)
Compte alex créé avec succès.

> (Après connexion)
> Salut tout le monde !
[12:34:56] alex: Salut tout le monde !

> /all
=== Historique du chat ===
[12:34:56] alex: Salut tout le monde !
==========================
```

---

*Fichier README généré automatiquement pour le projet User Login System.*
