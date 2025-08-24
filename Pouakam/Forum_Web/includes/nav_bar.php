
<nav class="navbar navbar-expand-lg bg-secondary p-4">
    <div class="container-fluid">
        <a class="navbar-brand text-light fw-bolder fs-3" href="#">Forum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ml-5">
                <a class="nav-link" aria-current="page" href="index.php">Questions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="publish_question.php">Add question</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="my_questions.php">My questions</a>
            </li>
            <?php if(isset($_SESSION['auth'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="actions/users/logout_action.php">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">sign-in</a>
                </li>
            <?php endif; ?>
        </div>
    </div>
</nav>