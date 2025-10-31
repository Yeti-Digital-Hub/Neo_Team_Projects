<?php

    require('actions/users/security_action.php');
    require('actions/questions/get_infos_of_edited_question.php');
    require('actions/questions/edit_question_action.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/head.php'; ?>
    <body>
        <?php include 'includes/nav_bar.php' ?>
        <main class="container mt-5">
            <div class="mb-3">
                <?php if(isset($errorMsg)){ echo '<p class="text-danger"><i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg.'</p>'; }?>
            </div>
            <?php if(isset($questionContent)): ?>
                <h1 class="text-primary">Edit your question</h1>
                <form method="post" autocomplete="off">
                    <div class="mb-3">
                        <label for="title-question" class="form-label">Title question</label>
                        <input type="text" class="form-control" name="title-question" id="title-question" placeholder="Enter your title question" value="<?= $questionTitle; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="description-question" class="form-label">Description of the question</label>
                        <textarea type="text" class="form-control" name="description-question" id="description-question" placeholder="Enter the description of your question"><?= $questionDescription; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="content-question" class="form-label">Content of the quetion</label>
                        <textarea type="text" class="form-control" name="content-question" id="content-question" placeholder="Enter the content of your question"><?= $questionContent; ?></textarea>
                    </div>
                    <button type="submit" name="validate" class="mb-3 btn btn-primary" title="post">Edit question</button>
                </form>
            <?php endif; ?>
        </main>
    </body>
</html>