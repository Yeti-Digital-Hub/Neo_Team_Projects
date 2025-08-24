<?php
    session_start();

    require('actions/questions/show_all_questions_action.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/head.php'; ?>
    <body>
        <?php include 'includes/nav_bar.php' ?>

        <div class="container">
            <form method ="GET" class="form-group mt-4 mb-5 row" role="search">
                <div class="col-8">
                    <input class="form-control" type="search" name="search" placeholder="Search" title="Enter a search"/>
                </div>
                <div class="col-4">
                    <button class="btn btn-success" type="submit" title="Search"><i class="fa-solid fa-search fw-bolder"></i> </button>
                </div>
            </form>
            <?php 
                $allQuestions = $getAllQuestions->fetchAll();
                if(isset($allQuestions) AND !empty($allQuestions)):
            ?>
            <h3 class="fw-border text-success mb-3">Forum questions</h3>
                    <?php
                        foreach($allQuestions as $value):
                    ?>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <a href="content_question.php?id=<?= $value['id']; ?>">
                                        <?= $value['title']; ?>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <?= $value['description']; ?>
                                </div>
                                <div class="card-footer">
                                    Publier par <span class="text-primary"><?= $value['pseudo_author']; ?></span>, le <span class="text-secondary"><?= $value['date_publish']; ?></span>
                                </div>
                            </div>
                    <?php endforeach; ?>
            <?php 
                else:
                    echo '<span class="text-danger h5"><i class="fa-solid fa-triangle-exclamation"></i> No data found !</span>';
                endif;
            ?>
        </div>
    </body>
</html>