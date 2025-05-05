#  Le projet Boo-Mind... 

C'est une application web simple de gestion de tâches (**To-Do-List**) sans usage de base de données.

---

## 🚀 Fonctionnalités...

- 🔐 Un espace de Login(**Sign-in**) et d'incription(**Sign-up**) qui permettra de gerer les tâches en fonction de chaque utilisateur de l'application.
- 💾 Sauvegarde automatique dans un fichier JSON.
- ✅ Ajouter une tâche.
- 📝 Modifier une tâche.
- 🗑️ Supprimer une tâche.

---

## 🧰 Technologies utilisées

- HTML
- CSS
- BOOTSTRAP (**Pour ajouter les icônes, et d'autre petits fonctionnalités...**)
- PHP
- JSON (pour le stockage des tâches)

---

**Boo-Mind**/
├── index.php                  # Page pour se connecter (sign-in) ou aller vers l'inscription (sign-up)
├── signup.php                 # Page d'inscription
├── dashboard.php              # Page principale après connexion, affichant les tâches de l'utilisateur et les actions possibles
├── logout.php                 # Déconnexion de l'utilisateur
├── users.json                 # Liste des comptes utilisateurs (JSON)
├── data/
│   └── utilisateur_XXX.json   # Fichier de tâches propre à chaque utilisateur connecté
├── assets/
│   └── css/
│       ├── bootstrap.min.css          # Bootstrap local
│       ├── bootstrap-icons.css        # Icônes Bootstrap
│       └── style.css                  # Ton style personnalisé
└── README.md                 # Documentation du projet (Markdown)
