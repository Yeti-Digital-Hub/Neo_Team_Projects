<?php
    session_start();

    // pour ce qu'il veut repondre sans vous connectez
    if(!isset($_SESSION['auth'])):

        echo '<p>Inscrivez-vous d\'abord ou connectez-vous au forum avant d\'accéder à ses informations</p>';

    else:

        require('actions/questions/show_content_question_action.php');
        require('actions/questions/post_answer_action.php');
        require('actions/questions/show_all_answer_of_question.php');

?>
        <!DOCTYPE html>
        <html lang="en">
            <?php require('includes/head.php'); ?>
            <body>
            <?php require('includes/nav_bar.php'); ?>

            <div class="container mt-5">
                <span class="fw-bolder text-danger"><?php if(isset($errorMsg)){ echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$errorMsg; } ?></span>

                <section class="show-content-question">
                    <?php
                        if(isset($dateQuestionPublish)):
                    ?>
                        <h3 class="text-dark fw-bold"><?= $questionTitle; ?></h3>
                        <hr>
                        <p><?= $questionContent; ?></p>
                        <hr>
                        <small>
                            Publier par : 
                                    <a href="profile.php?id=<?= $questionIdAuthor; ?>">
                                        <span class="h6"><?= $questionPseudoAuthor; ?></span>
                                    </a>
                                    <span class="text-secondary h6 ms-4">
                                        <?=$dateQuestionPublish; ?>
                                    </span>
                        </small>
                    <?php endif; ?>
                </section>
                <section class="show-field-answer mt-5">
                    <form method="post" autocomplete="off">
                        <label for="answer" class="form-label text-dark">Answer :</label><br>
                        <span class="text-danger mt-2"><?php if(isset($php_errormsg)){ echo '<i class="fa-solid fa-triangle-exclamation"></i> '.$php_errormsg; } ?></span>
                        <textarea name="answer" class="form-control" id="answer" placeholder="Enter your answer"></textarea>
                        <button type="submit" name="validate" class="mt-3 btn btn-primary">Send</button>
                    </form>
                </section>
                <sestion class="show-all-answer mt-5">
                    <?php 
                        if(isset($answersQuestion) AND !empty($answersQuestion)):
                    ?>
                    <h3 class="text-dark fw-bold mb-3 mt-4">Answers available</h3>
                            <?php
                                foreach($answersQuestion as $value):
                            ?>
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <a href="profile.php?id=<?= $value['id_author']; ?>">
                                                <?= $value['pseudo_author']; ?>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <?= $value['content_answer']; ?>
                                        </div>
                                    </div>
                            <?php endforeach; ?>
                    <?php 
                        else:
                            echo '<br><span class="text-dark fw-bold h5">No answer has yet been published on this question !</span>';
                        endif;
                    ?>
                </sestion>
            </div>
            </body>
        </html>
<?php
        endif;
?>