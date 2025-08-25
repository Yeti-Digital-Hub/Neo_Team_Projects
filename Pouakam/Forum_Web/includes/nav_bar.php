<nav class="navbar navbar-expand-lg bg-secondary p-4">
    <div class="container-fluid">
        <a class="navbar-brand text-light fw-bolder fs-3" href="#">Forum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'): ?>
                <li class="nav-item ml-5">
                    <a class="nav-link active" aria-current="page" href="index.php">Questions</a>
                </li>
            <?php else:?>
                <li class="nav-item ml-5">
                    <a class="nav-link" aria-current="page" href="index.php">Questions</a>
                </li>
            <?php endif; ?>

            <?php if(basename($_SERVER['PHP_SELF']) == 'publish_question.php'): ?>
                <li class="nav-item ml-5">
                    <a class="nav-link active" aria-current="page" href="publish_question.php">Add question</a>
                </li>
            <?php else:?>
                <li class="nav-item ml-5">
                    <a class="nav-link" aria-current="page" href="publish_question.php">Add question</a>
                </li>
            <?php endif; ?>

            <?php if(basename($_SERVER['PHP_SELF']) == 'my_questions.php'): ?>
                <li class="nav-item ml-5">
                    <a class="nav-link active" aria-current="page" href="my_questions.php">My questions</a>
                </li>
            <?php else:?>
                <li class="nav-item ml-5">
                    <a class="nav-link" aria-current="page" href="my_questions.php">My questions</a>
                </li>
            <?php endif; ?>


            <?php if(isset($_SESSION['auth'])): ?>

                <?php if (basename($_SERVER['PHP_SELF']) == "profile.php" && isset($_GET['id']) && $_GET['id'] == $_SESSION['id']): ?>
                    <li class="nav-item ml-5">
                        <a class="nav-link active" aria-current="page" href="profile.php?id=<?= $_SESSION['id']; ?>">My profile</a>
                    </li>
                <?php else:?>
                    <li class="nav-item ml-5">
                        <a class="nav-link" aria-current="page" href="profile.php?id=<?= $_SESSION['id']; ?>">My profile</a>
                    </li>
                <?php endif; ?>
    
                <?php if(basename($_SERVER['PHP_SELF']) == 'logout_action.php'): ?>
                <li class="nav-item ml-5">
                    <a class="nav-link active" aria-current="page" href="actions/users/logout_action.php">Logout</a>
                </li>
                <?php else:?>
                    <li class="nav-item ml-5">
                        <a class="nav-link" aria-current="page" href="actions/users/logout_action.php">Logout</a>
                    </li>
                <?php endif; ?>
                
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">sign-in</a>
                </li>
            <?php endif; ?>
        </div>
    </div>
</nav>