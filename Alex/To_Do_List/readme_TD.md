# 📝 To-Do List

---

## 🚀 Objectif

Ce projet permet de gérer une **liste de tâches** depuis le terminal.
L’utilisateur peut ajouter, supprimer, mettre à jour ou marquer des tâches comme terminées, avec stockage persistant dans un fichier `tasks.json`.

---

## 🛠️ Technologies utilisées

* **Python 3**
* Modules standard :

  * `json` (stockage structuré des tâches)
  * `os` (gestion des fichiers)

---

## 📁 Organisation des fichiers

```
Neo_Team_Projects/
└── Alex/
    └── To_Do_List/
        ├── todo.py       # script principal
        └── tasks.json    # stockage des tâches (créé automatiquement)
```

---

## ⚙️ Utilisation

1. **Ouvre un terminal** dans le dossier `To_Do_List`.
2. **Lance le script** :

   ```bash
   python todo.py
   ```
3. **Choisis une action** depuis le menu :

   * `1` → Ajouter une tâche
   * `2` → Supprimer une tâche
   * `3` → Mettre à jour une tâche
   * `4` → Marquer comme terminée
   * `5` → Afficher toutes les tâches
   * `0` → Quitter

---

## 📦 Fonctionnalités

* Ajout de tâches avec titre
* Suppression de tâches existantes
* Modification du titre des tâches
* Marquage comme terminée
* Affichage complet de la liste
* Stockage persistant dans `tasks.json`

---

## 👤 Auteur

* **Alex**
* 📅 Début du projet : 20 septembre 2025
* 🧑‍🏫 Collaborateur(s) : Joss

---

## 📝 Exemple d’utilisation

```
--- To-Do List ---
1. Ajouter une tâche
2. Supprimer une tâche
3. Mettre à jour une tâche
4. Marquer comme terminée
5. Afficher toutes les tâches
0. Quitter
> 1
Titre de la tâche > Réviser Python
✅ Tâche ajoutée : Réviser Python

> 5
=== Liste des tâches ===
1. Réviser Python [❌]
=======================

> 4
ID de la tâche à marquer comme terminée > 1
✅ Tâche terminée : Réviser Python

> 5
=== Liste des tâches ===
1. Réviser Python [✅]
=======================
```
