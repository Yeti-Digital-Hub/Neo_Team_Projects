<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password forget</title>
    <link rel="stylesheet" href="assets/icons/css/all.min.css">
    <link rel="stylesheet" href="files_style/style-forget-password.css?v=1.3">
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
        <div class="title">
            <h1 class="title-forget-password">Forget password?</h1>
            <h3 class="sous-title-forget-password">Remember your password? <a href="#">Login here</a></h3>
        </div>
        <div class="form-forget-password">
            <form action="consult-token-email.php" method="post" autocomplete="off">
                <label for="email-forget">Email address :</label>
                <div class="card-input">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email-forget" id="email-forget" placeholder="Enter your email" autocomplete="off">
                </div>
                <div class="card-btn">
                    <button type="submit" name="next">Next</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>