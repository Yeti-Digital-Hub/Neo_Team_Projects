<?php

    require('actions/users/security_action.php');
    require('actions/users/show_one_profil_action.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php require('includes/head.php'); ?>
    <body>
        <?php require('includes/nav_bar.php'); ?>

        <div class="container">
            <?php if(isset($php_errormsg)){ echo '<p class ="text-danger mt-4"><i class="fa-solid fa-triangle-exclamation"></i> '.$php_errormsg.'</p>'; } ?>

            <?php
                if(isset($getQuestions)):
            ?>
                    <div class="card mt-5 mb-5">
                        <div class="card-body">
                            <h4>@<?= $userPseudo; ?></h4>
                            <hr>
                            <p><?= $userName. ' ' .$userSurname ;?></p>
                        </div>
                    </div>
            <?php
                    foreach($userQuestions as $value):
            ?>
                        <div class="card mt-3">
                            <div class="card-header"><?= $value['title']; ?></div>
                            <div class="card-body"><?= $value['description']; ?></div>
                            <div class="card-footer">Par <span class="text-primary">@<?= $value['pseudo_author']; ?></span> le <span class="text-secondary"><?= $value['date_publish']; ?></span></div>
                        </div>
            <?php
                    endforeach;
                endif;
            ?><br><br>
        </div>
    </body>
</html>