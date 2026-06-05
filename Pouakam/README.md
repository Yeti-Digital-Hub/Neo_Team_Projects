# Dossier de Pouakam
Dépose ici tous tes projets personnels.

# Dans chaque sous-dossier de projet :

Crée un fichier README.md.

Explique :

L'objectif du projet.

Les technos utilisées.

Comment l’exécuter.

Qui y travaille.


# ✅ flux de travail recommandé pour chaque membre :

### 🛠 Voici le processus pour créer ta branche individuelle a chaque nouveau Travail :

Supposons que **Pouakam** travaille sur un nouveau projet appelé **Météo**.

1. il commence par **se placer dans la branche `main`** localement (après avoir cloné le dépôt).

2. il **crée une nouvelle branche** dédiée à son projet, avec une commande comme :

```bash
git checkout -b Neo_team_projets/Pouakam/Météo
```

*(Cela crée une branche appelée `Neo_team_projets/Pouakam/Météo`)*

3. Dans son dossier personnel (`Neo_team_projets/Pouakam/`),  
il crée un **nouveau dossier** pour son projet :

```
Neo_team_projets/Pouakam/Météo/
```

Et il travaille dans ce dossier : fichiers HTML, CSS, PHP, Python, etc.

4. Ensuite il **add**, **commit** et **push** :

```bash
git add .
git commit -m "Premier commit du projet Météo"
git push origin Neo_team_projets/Pouakam/Météo
```

5. **Depuis GitHub**, il crée une **Pull Request (PR)** pour demander de fusionner sa branche vers `main`.

---

### 🧠 Résumé clair du flux :

| Étape | Commande ou Action |
|:----|:----|
| 1 | Se placer sur `main` → `git checkout main` |
| 2 | Récupérer les dernières maj → `git pull origin main` |
| 3 | Créer une branche perso → `git checkout -b Neo_team_projets/Pouakam/Météo` |
| 4 | Travailler dans `Neo_team_projets/Pouakam/Météo/` |
| 5 | `git add .` → `git commit -m "Ajout projet Formulaire"` |
| 6 | `git push origin Neo_team_projets/Pouakam/Météo` |
| 7 | Créer une **Pull Request** depuis GitHub |
| 8 | Revue et **fusion** de la PR vers `main` |


---

# 🎯 Projet To-Do List en PHP

Ce projet est une **application To-Do List (list de taches)** simple permettant aux utilisateurs d’ajouter, consulter et supprimer des tâches via une interface web.

---

# 🕹️ Fonctionnalités de base
- Ajouter une tâche.
- Afficher toutes les tâches enregistrées.
- Supprimer une tâche.
- Sauvegarde des tâches dans un fichier texte (`.txt`).

---

# 📖 Comment utiliser l'application
- Clonez ou téléchargez ce dépôt.
- Placez les fichiers dans votre serveur local (ex: XAMPP, WAMP, Laragon...).
- Ouvrez votre navigateur et accédez à `localhost/Neo_team_projets/Pouakam/Todo_List/index.php`.
- Ajoutez vos tâches via le formulaire, visualisez-les en temps réel et supprimez-les si besoin.

---

# 🖥️ Exemple de fonctionnement
```plaintext
1. L'utilisateur arrive sur la page "To-Do List".
2. Il voit la liste actuelle de ses tâches (s'il y en a).
3. Il saisit une nouvelle tâche dans un champ texte et clique sur "Ajouter".
4. La tâche s'affiche immédiatement dans la liste.
5. L'utilisateur peut cliquer sur "Supprimer" à côté d'une tâche pour l'enlever.
```

---

## **Étapes de réalisation**

### **Étape 1 : Préparer ton environnement**

- Crée un dossier pour ton projet, exemple : `/todo-list/`
- Installe un serveur local (WAMP, XAMPP ou MAMP) si ce n'est pas encore fait.
- Crée un fichier principal `index.php`.
---

### **Étape 2 : Créer l'interface de base**
- Dans `index.php`, crée un formulaire HTML simple :
- Et un endroit pour **afficher** ta liste de tâches.

---

### **Étape 3 : Stocker et afficher les tâches**

```
- Quand l’utilisateur envoie le formulaire :
  - Récupère la tâche avec `$_POST['tache']`
  - L'ajouter à `$_SESSION['taches']`

Exemple :

```php
if (isset($_POST['tache']) && !empty($_POST['tache'])) {
    $_SESSION['taches'][] = htmlspecialchars($_POST['tache']);
}
```

- Ensuite **affiche toutes les tâches** en parcourant le tableau :

```php
foreach ($_SESSION['taches'] as $index => $tache) {
    echo "<li>$tache <a href='?supprimer=$index'>Supprimer</a></li>";
}
```

---

### **Étape 4 : Supprimer une tâche**

- Si l'utilisateur clique sur "Supprimer", il passe l’`index` dans l'URL (`?supprimer=2` par exemple).
- En haut de `index.php`, ajoute :

```php
if (isset($_GET['supprimer'])) {
    $index = (int) $_GET['supprimer'];
    unset($_SESSION['taches'][$index]);
}
```

Ainsi, tu peux ajouter ET supprimer des tâches facilement.

---

# **Améliorations :**

1. **Utiliser un fichier texte** pour sauvegarder les tâches même après avoir fermé le navigateur.
   - Fonctions utiles : `file_put_contents()`, `file_get_contents()`, `json_encode()`, `json_decode()`.
2. **Styliser avec un peu de CSS** pour que ce soit plus joli.


---

# 🧠 **Ce que tu apprendras avec la Todo-List**

| Notion                                | Application                                           |
|---------------------------------------|-------------------------------------------------------|
| $_POST, $_GET                         | Recevoir les données du formulaire                   |
| isset(), empty()                      | Vérifier si une valeur existe                        |
| array_push(), unset()                 | Manipuler les éléments de liste                      |
| session_start(), $_SESSION            | Conserver les données entre les pages                |
| file_put_contents(), file_get_contents() (bonus) | Sauvegarder ta Todo-List dans un fichier    |
| Un peu de HTML                        | Créer des formulaires                                |
| Sécurité : htmlspecialchars()         | Protéger ton site contre les failles XSS simples      |
