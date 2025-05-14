#  Le projet Boo-Mind... 

C'est une application web simple de gestion de tâches (**To-Do-List**) sans usage de base de données.

## 🚀 Fonctionnalités...

- 💾 Sauvegarde automatique dans un fichier JSON.
- ✅ Ajouter une tâche.
- 📝 Modifier une tâche.
- 🗑️ Supprimer une tâche.

## 🧰 Technologies utilisées...

- HTML
- CSS
- BOOTSTRAP (**Pour ajouter les icônes, et d'autre petits fonctionnalités...**)
- PHP
- Format JSON (pour le stockage des tâches)

## Paradigmes utilisés...

J'ai utiliser du paradigme fontionelle et un peut de procédurale pour l'appel de mes fonctions(Tout ceci en structurant mon travail avec de la programmation modulaire).

---
## 🗂️ Structure du Projet(**Boo-Mind**)...

Voici comment j'ai structurer mon projet :

```
├── /**Boo-Mind**
│   ├── README.md # Markdown...
│   ├── index.php # page main de l'appliaction...
│   ├── taskStorage.php # c'est la page(module) qui me permet de stocker les taches ajouter dans ma Bd au format json...
│   ├── styel-project/
│   │    ├── bootstrap-icons-1.12.1 # folder for icons bootstrap...
│   │    └── style.css #file for CSS de Boo-Mind...
│   ├── dataBase.json #file for la data base au format json de l'App-web BooMind...
│ 
```
---
## Problèmes rencontrés Pour le moment...

Mon sérieux problèmes que j'ai eu c'est au niveau de choix de l'interface, c'est même cela qui ma peru extrêmement de temp dans l'avancer dans mon projet. C'est aujourd'huit je fait un inteface demain je le change parceque il ne me plait plus... 

## Création de mon interface web...

Vue mon problème au niveau du choix de l'interface j'ai été contrain d'utiliser un maquetes de To-Do List qui existait déjà et j'ai reproduit l'apparence exact de l'interface.

## Partie Backend de mon Application...

A ce niveau j'ai utiliser la programmation modulaire, ce qui ma permis de diviser la logique métier de mon application 2 modules :
1. **taskStorage.php :** ce module me permet de stocker les taches ajouter par l'utilisateur dans le fichier **dataBase.json**(Ma base de donnée).

    # 🕹️ Fonctionnalités du module 1 **taskStorage.php :**
        j'ai implémenter ce module à l'aide de plusieurs fonctions crées qui sont :
    - `filterTasks();` : qui me permet de me rassurer que les data entrez dans le champs des tasks son conforme.
    -  `stroreTasks();` : qui me permet de stoker les taches entrez par mes users dans ma dataBase(Mon file au format json).
    -   ```php
        if(file_exists('dataBase.json')) {
            $_SESSION['taches'] = json_decode(file_get_contents('dataBase.json'), true);
        } else{
            $_SESSION['taches'] = array();
        }
        ```   // "Tout ce ceci me permet d'initialiser ma variable $_SESSION['taches']"
    -   ```php
        if(isset($_POST['addTaskBtn'])) {
            if(isset($_POST['taskText']) && !empty($_POST['taskText'])){
                $_SESSION['taches'][] = filterTasks($_POST['taskText']);
                // stockage des taches dans le fichier dataBase.json...
                storeTasks($_SESSION['taches']);
            }    
        }
        ```   // "A ce niveau je vérifie si le user donc la session à été créer lors du lancement de son Browser à bien remplit une tache et qu'il à soumit le bouton ['addTaskBtn'], si cela étant bien faite je stock d'abord la tache dans le dernier item du array $_SESSION['taches'] grace à l'intruction [$_SESSION['taches'][] = filterTasks($_POST['taskText']);] et puis j'appelle ma fonction `stroreTasks();` pour stocker la tache dans dataBase.json."

---
2. **deleteTask.php :** ce module me permet supprimer mes tasks ajouter via la méthode Get. 

    # 🕹️ Fonctionnalités du module 2 **deleteTask.php :**
        Ici j'ai fonctionner avec un paradigme procédural
    ```php
        // Suppression via GET
    if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
        $index = intval($_GET['delete']);
        if (isset($_SESSION['taches'][$index])) {
            unset($_SESSION['taches'][$index]);
            $_SESSION['taches'] = array_values($_SESSION['taches']); // Réindexation
            storeTasks($_SESSION['taches']);
            // Redirection pour éviter la suppression multiple si on recharge la page
            header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
            exit();
        }
    }
    ```   // "ici $_GET['delete'] permet de stocker l'index de la tache à modifier, puis on vérifie son existance ensuite je le convertir en un no,bre entie à l'aide la fonction `intval();` pour la sécurité dans le cas où il peut etre un string; puis une fois que c'est j'indexe le tableau contenu dans la session pour avoir la tache à supprimer(en controlant quel existe dans le tableau de session, une fois quelle existe je là supprime, ensuite à l'aide de la fonction `array_values();` je réindexe tout le tableau car j'ai un nouveau tableau et afin je restocke en base de donnée.)"