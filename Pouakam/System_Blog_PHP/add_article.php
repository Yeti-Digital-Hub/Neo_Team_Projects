<?php
    //fchier du debugagge
    require_once '../Debug.php';

    //logique metier de l'ajout de l'article
    require_once 'includes/traitement_add_article.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajouter un article sur E-Blog.cm</title>
        <link rel="stylesheet" href="style_project/style.css">
        <!-- importation de la biliothèque font-awersomes...-->
        <link rel="stylesheet" href="icons/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1 class="title-blog"><span>e</span>-Blog</h1>
            <nav>
                <ul>
                    <li><a href="index.php"><i class="fa-solid fa-home"></i>Accueil</a></li>
                    <li><a href="add_article.php" class="active"><i class="fa-solid fa-plus"></i>Publier un article</a></li>
                    <li><a href="../Formulaire_Contact/index.php"><i class="fa-solid fa-phone"></i>Contactez-nous</a></li>
                </ul>
            </nav>
        </header> 
        <main class="main-add-article">
            <h2>Publier un article</h2><hr class="hr-publier-article">
            <form action="" method="post" enctype="multipart/form-data" class="form-add-article" autocomplete="off">
                <div class="card-title-article">
                    <label for="title-article">Titre de l'article :</label>
                    <input type="text" name="title-article" id="title-article">
                </div>
                <div class="card-contenu-article">
                    <label for="contenu-article">Entrer votre article :</label>
                    <textarea name="contenu-article" id="contenu-article"></textarea>
                </div>
                <div class="card-img-article">
                    <label for="img-article">Ajouter une image pour votre article :</label>
                    <input type="file" name="img-article" id="img-article">
                </div>
                <div class="card-btn-publier">
                    <button type="submit" class="publier-article" name="publier-article">Publier</button>
                </div>
            </form>
        </main>
    </body>
</html>