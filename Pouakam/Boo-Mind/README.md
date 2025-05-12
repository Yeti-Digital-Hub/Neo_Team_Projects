#  Le projet Boo-Mind... 

C'est une application web simple de gestion de tâches (**To-Do-List**) sans usage de base de données.

---

## 🚀 Fonctionnalités...

- 💾 Sauvegarde automatique dans un fichier JSON.
- ✅ Ajouter une tâche.
- 📝 Modifier une tâche.
- 🗑️ Supprimer une tâche.

---

## 🧰 Technologies utilisées...

- HTML
- CSS
- BOOTSTRAP (**Pour ajouter les icônes, et d'autre petits fonctionnalités...**)
- PHP
- Format JSON (pour le stockage des tâches)

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

---

Mon sérieux problèmes que j'ai eu c'est au niveau de choix de l'interface, c'est même cela qui ma peru extrêmement de temp dans l'avancer dans mon projet. C'est aujourd'huit je fait un inteface demain je le change parceque il ne me plait plus... 

## Création de mon mon interface web...

---

Vue mon problème au niveau du choix de l'interface j'ai été contrain d'utiliser un maquetes de To-Do List qui existait déjà et j'ai reproduit l'apparence exact de l'interface.

---
## Partie Backend de mon Application...
---
A ce niveau j'ai utiliser la programmation modulaire, ce qui ma permis de diviser la logique métier de mon application 2 modules :
1. **taskStorage.php :** ce module me permet de stocker les taches ajouter par l'utilisateur dans le fichier **dataBase.json**(Ma base de donnée).