<?php

    require ('../Debug.php');
    require('actions/users/security_action.php');
    require('actions/questions/publish_question_action.php');
    
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/head.php'; ?>
    <body>
        <?php include 'includes/nav_bar.php' ?>
        <main class="container mt-5">
            <h1 class="text-primary">Post a question</h1>
            <form method="post" autocomplete="off">
                <div class="mb-3">
                    <?php 
                        if(isset($errorMsg))
                        { 
                            echo '<p class="text-danger"><i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg.'</p>'; 
                        }
                        elseif(isset($successMsg))
                        {
                            echo '<p class="text-success"><i class="fa-solid fa-circle-check"></i> '.$successMsg.'</p>'; 
                        }
                    ?>
                </div>
                <div class="mb-3">
                    <label for="title-question" class="form-label">Title question</label>
                    <input type="text" class="form-control" name="title-question" id="title-question" placeholder="Enter your title question">
                </div>
                <div class="mb-3">
                    <label for="description-question" class="form-label">Description of the question</label>
                    <textarea type="text" class="form-control" name="description-question" id="description-question" placeholder="Enter the description of your question"></textarea>
                </div>
                <div class="mb-3">
                    <label for="content-question" class="form-label">Content of the quetion</label>
                    <textarea type="text" class="form-control" name="content-question" id="content-question" placeholder="Enter the content of your question"></textarea>
                </div>
                <button type="submit" name="validate" class="mb-3 btn btn-primary" title="post">Post</button>
            </form>
        </main>
    </body>
</html>