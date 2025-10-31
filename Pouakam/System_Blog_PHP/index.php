<?php
    require_once '../Debug.php';

    // Inclusion du fichier de traitement des articles
    include('includes/traitement_index.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Blog.cm</title>
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
                    <li><a href="index.php" class="active"><i class="fa-solid fa-home"></i>Accueil</a></li>
                    <li><a href="add_article.php"><i class="fa-solid fa-plus"></i>Publier un article</a></li>
                    <li><a href="../Formulaire_Contact/index.php"><i class="fa-solid fa-phone"></i>Contactez-nous</a></li>
                </ul>
            </nav>
        </header>
            <div class="card-thematique-blog">
                <p class="thematique-blog">
                    <span class="capital-letter">C</span>e blog à été conçu par l'entreprise I-Tech <span class="name-boogie">Boogie</span> afin de publier de façon régulier des articles sur les technologies web,
                    tout article de ce blog est conforme aux documentations officielles des technologies en question et approuver par des experts du domaine. 
                </p>
            </div>
            <div class="view-posts">
                <?php
                    // Affichage des articles
                    if(!empty($postsByDate))
                    {
                        foreach($postsByDate as $keys => $articles)
                        {
                            echo '
                                <div class="card-posts">
                                    <div class="card-img-posts">
                                        <img src="img/'.$articles['img-article'].'" alt="Image de l\'article" class="img-posts"> 
                                    </div>
                                    <h3 class="title-post">'.htmlspecialchars_decode($articles['titre_article']).'</h3>
                                    <div class="data-posts">
                                        <p class="data-autor-posts">
                                            <span class="author-post"> <strong class="autor">Auteur: </strong>'.$articles['auteur'].'</span>
                                            <span class="date-post"><strong class="autor">Posté le: </strong>'.$articles['date_publication'].'</span>
                                        </p>
                                        <p class="content-post">'.htmlspecialchars_decode($articles['contenu']).'</p>
                                    </div>
                                </div>
                            ';
                        }
                    }
                    else
                    {
                        echo '<p>Aucun article publié pour le moment.</p>';
                    }
                ?>
            </div>
        <footer>
            <p>&copy; 2025 e-Blog.cm - Tous droits réservés</p>
            <p>Conçu par <span class="name-boogie">Boogie</span> Entreprise I-Tech spécialiser dans la conception et developpement de solutions digitales innovantes et modernes</p>
        </footer>
    </body>
</html>