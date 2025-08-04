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
        <form action="#" method="post" autocomplete="off">
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