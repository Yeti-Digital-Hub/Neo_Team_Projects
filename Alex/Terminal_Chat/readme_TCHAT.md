# 💬 Terminal Chat

---

## 🚀 Objectif

Ce projet permet de simuler une **messagerie locale dans le terminal**.
Les utilisateurs peuvent se **connecter ou s’inscrire** avec un pseudo et un mot de passe, envoyer des messages, et consulter l’historique complet du chat.

---

## 🛠️ Technologies utilisées

* **Python 3**
* Modules standard :

  * `os` (gestion fichiers)
  * `time` (temporisation / rafraîchissement)
  * `datetime` (horodatage des messages)
  * `json` (stockage des utilisateurs)
* Fichiers locaux :

  * `data.json` → stockage des comptes utilisateurs
  * `chat.txt` → historique des messages

---

## ⚙️ Utilisation

1. **Ouvre un terminal** dans le dossier `Terminal_Chat`.
2. **Lance le script** :

   
   python chat.py
   
3. **Choisis une action** :

   * `1` → Connexion avec ton pseudo et mot de passe existants
   * `2` → Inscription si tu n’as pas encore de compte
4. **Envoie tes messages** directement dans le terminal.
5. **Commandes spéciales** :

   * `/all` → afficher tout l’historique des messages

---

## 🔐 Sécurité

> Les pseudos et mots de passe sont stockés **en clair** dans `data.json`.
> Ce projet est un prototype local : pour un usage réel, il faudrait **hash les mots de passe** avant stockage.

---

## 📦 Fonctionnalités

* Connexion et inscription avec pseudo + mot de passe
* Écriture et lecture de messages horodatés
* Historique complet des messages accessible via `/all`
* Stockage persistant des utilisateurs et des messages
* Interface simple en terminal, sans serveur réseau

---

## 👤 Auteur

* **Alex**
* 📅 Début du projet : 17 septembre 2025
* 🧑‍🏫 Suivi par : [Mentor_GuruMiT]

---

## 📝 Exemple d’utilisation

```
1. Connexion
2. Inscription
> 2
Choisis un pseudo > Alex
Choisis un mot de passe > 1234
Compte Alex créé avec succès 

> Salut Joss !
[12:34:56] Alex: Salut Joss !

> /all

=== Historique du chat ===
[12:34:56] Alex: Salut Joss !
==========================
```
