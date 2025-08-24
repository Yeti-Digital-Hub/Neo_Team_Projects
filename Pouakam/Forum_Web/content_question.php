<?php
    session_start();
    require('actions/questions/show_content_question_action.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php require('includes/head.php'); ?>
    <body>
    <?php require('includes/nav_bar.php'); ?>

    <div class="container mt-5">
        <span class="fw-bolder text-danger"><?php if(isset($errorMsg)){ echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg; } ?></span>

        <?php
            if(isset($dateQuestionPublish)):
        ?>
            <h3><?= $questionTitle; ?></h3>
            <hr>
            <p><?= $questionContent; ?></p>
            <hr>
            <small>
                <?= 'Publier par : <span class="text-primary h6 text-decoration-underline"> '.$questionPseudoAuthor.'</span>'.' <span class="text-secondary h6 ms-4">' .$dateQuestionPublish.'</span>'; ?>
            </small>
        <?php endif; ?>
    </div>
    </body>
</html>