
# 🚀 Référentiel des projets d'équipe – [Neo_Team_Projects]

Bienvenue au cœur du parcours de formation et de développement de notre équipe en ingénierie !

Ce référentiel contient tous les **projets de formation individuels** et **expérimentations** réalisés par les membres pour développer leurs compétences dans les domaines suivants :

- 🔹 Développement front-end 
- 🔹 Développement back-end 
- 🔹 AI
- 🔹 Analyse de Donnees
- 🔹 Bonnes pratiques en ingénierie logicielle
- 🔹 Collaboration d'équipe et workflow Git

---

## 🧠 Philosophie

> « Nous ne nous contentons pas de coder, nous construisons l'avenir, un projet à la fois.»

Cet espace est conçu pour encourager l'**expérimentation**, la **discipline** et la **progression**. Chacun dispose de son propre dossier où il ajoute et met à jour régulièrement ses mini-projets.

---

# Projet GitHub - Guide d'utilisation du dépôt

Bienvenue dans notre dépôt de projets ! Ce dépôt est destiné à contenir tous les projets de l'équipe. Chaque membre de l'équipe a son propre dossier où il peut travailler sur son projet personnel. Nous utilisons Git et GitHub pour une gestion efficace et un suivi clair de nos travaux.

Voici un guide étape par étape sur la manière d'utiliser ce dépôt et de contribuer à nos projets.

---

## 🚀 **Cloner le dépôt**

Avant de commencer, clonez ce dépôt sur votre machine locale :

```bash
git clone https://github.com/ton-org/main-repo.git
cd main-repo


## 🗂️ Structure des dossiers

Voila comment doit etre structurer les dossiers a l'interieur de se repo :

/Neo_team_projets
│
├── /Kelie
│   ├── Projet A/  ( Cette Aborescence des projets n'est qu'a titre d'exemple )
│   │    ├── index.html
│   │    ├── style.css
│   │    └── script.js
|   |    └── README.md
│   ├── Projet Z
│
├── /Joss
│   ├── Projet A/ ( Cette Aborescence des projets n'est qu'a titre d'exemple )
│   │    ├── index.html
│   │    ├── style.css
│   │    └── script.js
|   |    └── README.md
│   ├── Projet Z
│
└── /Pouakam
    ├── Projet A/ ( Cette Aborescence des projets n'est qu'a titre d'exemple )
    │    ├── index.php
    │    ├── database.php
    |    └── README.md
    ├── Projet Z

Chaque membre a son propre dossier personnel dans /Neo_team_projects, et peut y créer plusieurs sous-projets si besoin.

## 🔄 **Flux de travail pour les contributions**

1. Chaque membre doit créer une branche dédiée à son projet. Cette branche contiendra toutes les modifications et évolutions liées au projet individuel, y compris les fonctionnalités.

Le nom de la branche doit suivre cette structure :

Neo_team_projets/nom-du-membre/nom-du-projet  --> exemple : Neo_team_projects/kelie/Formulaire

Pour créer cette branche, chaque membre peut exécuter la commande suivante dans son terminal :  --> git checkout -b Neo_team_projects/kelie/Formulaire

2. Travailler sur le projet individuel
Chaque membre travaille exclusivement dans son propre dossier sous /projets dans le dépôt. Par exemple :

/Neo_team_projets
│
├── /Kelie
│   ├── Projet A/  ( Cette Aborescence des projets n'est qu'a titre d'exemple )
│   │    ├── index.html
│   │    ├── style.css
│   │    └── script.js
|   |    └── README.md
│   ├── Projet Z
│
├── /Joss
│   ├── Projet A/ ( Cette Aborescence des projets n'est qu'a titre d'exemple )
│   │    ├── index.html
│   │    ├── style.css
│   │    └── script.js
|   |    └── README.md
│   ├── Projet Z
│
└── /Pouakam
    ├── Projet A/ ( Cette Aborescence des projets n'est qu'a titre d'exemple )
    │    ├── index.php
    │    ├── database.php
    |    └── README.md
    ├── Projet Z

Chaque membre doit se concentrer sur l’évolution de son propre projet. Il peut mettre à jour des fonctionnalités, ajouter des nouveaux fichiers ou améliorer le code, selon l’évolution du projet.

3. Faire des mises à jour régulières
Les membres doivent committer régulièrement leurs changements à mesure qu'ils ajoutent ou modifient des fonctionnalités dans leur projet. Cela permet de suivre l'évolution du travail et de rendre l'historique des changements plus lisible.

Voici les commandes que vous devez utiliser pour committer leurs changements : Il est conseillé de commettre fréquemment, par exemple, après chaque fonctionnalité ajoutée ou mise à jour.

git add .
git commit -m "J'ai ajouter un button stylé a mon Formulaire"

4. Pousser la branche sur GitHub
Une fois que les modifications locales sont validées (commitées), chaque membre doit pousser sa branche sur GitHub afin de sauvegarder et partager ses progrès.

Pour cela, la commande est la suivante :

git push origin Neo_team_projects/kelie/Formulaire

5. Créer une Pull Request (PR)
Lorsque les modifications sont prêtes et que le membre souhaite intégrer son travail dans la branche **main**, il doit créer une Pull Request (PR) sur GitHub.

Voici les étapes :

Allez sur le dépôt GitHub.

Cliquez sur "Compare & pull request" à côté de la branche Neo_team_projects/kelie/Formulaire.

Dans la description de la PR, ajoutez des détails sur les fonctionnalités ajoutées ou les changements effectués.

Cliquez sur "Create pull request" pour soumettre la PR.

Cela permet à l'équipe et/ou au responsable de revoir les modifications avant qu'elles ne soient fusionnées dans la barnche principale (main).

6. Révision du code et validation
Avant que la PR ne soit fusionnée, le code doit être révisé par un autre membre de l’équipe (ou un responsable technique moi 😁). La revue consiste à vérifier si le code est fonctionnel, bien structuré, et conforme aux standards du projet.

Si des ajustements ou corrections sont nécessaires, ils peuvent être demandés avant la fusion.

7. Fusion de la PR et intégration dans main
Une fois la PR validée, la branche du projet est fusionnée dans la branche main. Cela permet d'intégrer les mises à jour de fonctionnalités dans le projet principal. La branche Neo_team_projects/kelie/Formulaire peut ensuite être supprimée pour garder le dépôt propre.

8. Mettre à jour votre branche locale après fusion
Une fois que la PR est fusionnée, chaque membre doit synchroniser sa branche locale avec la branche principale (main) afin de récupérer les dernières modifications apportées par les autres membres.

git checkout main
git pull origin main
git checkout Neo_team_projects/kelie/Formulaire
git rebase main

Cela garantit que chaque membre travaille sur la version la plus à jour du projet.

## Exemple de flux de travail simplifié pour un membre :

1.Créer une branche pour le projet :

git checkout -b Neo_team_projects/kelie/Formulaire

2.Travailler sur le projet individuel :

Modifier les fichiers dans le dossier Neo_team_projects/kelie/Formulaire.

3.Valider les changements :

git add .
git commit -m "Ajout du formulaire de connexion"

4.Pousser la branche vers GitHub :

git push origin Neo_team_projects/kelie/Formulaire

5.Créer une PR sur GitHub pour intégrer la branche dans main.

6.Révision et validation de la PR par un autre membre ou le responsable technique.

7.Fusion de la PR dans main (branche principale).

Mettre à jour la branche locale après fusion :

git checkout main
git pull origin main
git checkout Neo_team_projects/kelie/Formulaire
git rebase main


## Conclusion
Cette approche permet à chaque membre de l’équipe de travailler de manière autonome sur des projets individuels tout en maintenant une bonne organisation et une collaboration efficace. En suivant ce flux de travail, chaque projet est bien structuré, révisé et intégré au dépôt principal de manière contrôlée.









