<?php

    require('../Debug.php');
    require('actions/users/security_action.php');
    require('actions/questions/my_questions_action.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/head.php'; ?>
    <body>
        <?php include 'includes/nav_bar.php'; ?>

        <div class="container mt-5">
            <?php
                foreach($questions as $value):
            ?>
                    <div class="card mb-4">
                        <div class="card-header">
                            <a href="content_question.php?id=<?= $value['id']; ?>">
                                <?= $value['title']; ?>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <?= $value['description']; ?>
                            </p>
                            <a href="content_question.php?id=<?= $value['id']; ?>" class="btn btn-primary">Access a question</a>
                            <a href="edit_question.php?id=<?= $value['id']; ?>" class="btn btn-warning ms-2">Edit a question</a>
                            <a href="actions/questions/delete_question_actions.php?id=<?= $value['id']; ?>" class="btn btn-danger ms-2">Delete question</a>
                        </div>
                    </div>
            <?php
                endforeach;
            ?>
        </div>
    </body>
</html>