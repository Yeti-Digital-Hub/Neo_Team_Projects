<?php

    if(isset($_GET['token']))
    {
        if(json_decode(file_get_contents('data/reset_tokens.json'), true))
        {
            $dataToken = json_decode(file_get_contents('data/reset_tokens.json'), true);
            
            foreach($dataToken as $dataToken)
            {
                if($dataToken['token'] === $_GET['token'])
                {
                    $tokenValide = $dataToken;
                    break;
                }
            }
            if(isset($tokenValide))
            {
                date_default_timezone_set('Africa/Douala');
                $dataActuelle = date('Y-m-d H:i:s');
                $expiresAt = $tokenValide['expires_at'];

                if($dataActuelle > $expiresAt)
                {
                    header('Location: forget_password.php');
                    exit;
                }
                else
                {

?>

                    <!DOCTYPE html>
                    <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Reset password</title>
                            <link rel="stylesheet" href="files_style/style-reset-password.css">
                            <link rel="stylesheet" href="assets/icons/css/all.min.css">
                        </head>
                        <body>
                            <header class="header">
                                <div class="card-name-site">
                                    <div class="avatar">G</div>
                                    <div class="name-site">Gitlab</div>
                                </div>
                                <div class="logo-site">
                                    <i class="fa-brands fa-gitlab"></i>
                                </div>
                            </header>
                            <main>
                                <div class="title-form">
                                    <h1>Reset password</h1>
                                </div>
                                <form action="traitement_reset_password.php" method="post" autocomplete="off">
                                        <div class="card-field">
                                        <label for="new-password">New password :</label>
                                        <div class="group">
                                            <i class="fa-solid fa-lock"></i>
                                            <input type="password" name="new-password" id="new-password" placeholder="Enter your new password" autocomplete="off">
                                        </div>
                                        <label for="confirm-new-password">Confirm password :</label>
                                        <div class="group">
                                            <i class="fa-solid fa-lock"></i>
                                            <input type="password" name="confirm-new-password" id="confirm-new-password" placeholder="Confirm your new password" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="card-btn">
                                        <button type="submit" name="btn-reset">Reset</button>
                                    </div>
                                </form>
                            </main>
                        </body>
                    </html>

<?php

                }
            }
        }
    }
    else
    {
        // si le token n'a pas été créée
        header('Location: forget_password.php');
        exit;
    }

?>

