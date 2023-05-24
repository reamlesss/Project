<main class="text-center">
    <div class="my-5 container justify-content-center d-flex" id="fade">
        <form class="text-container-6 mx-5 w-75 mt-5" action="./pages/loginsystem/activatesys.php" method="POST">
            <?php
                if (isset($_SESSION['report'])) {
                    $reportMessage = $_SESSION['report'];
                    unset($_SESSION['report']);
                    echo "<p class='mb-5 fs-1 text-" . $_SESSION['color'] . "'>" . $reportMessage . "</p>";
                }
            ?>
            <div class="mb-5">
                <label for="name" class="form-label fs-1">Username</label>
                <input type="text" class="form-control border-0 border-bottom border-secondary border-2 rounded-0 fs-2 text-center fst-italic" name="name" maxlength="20" minlength="2" required>
            </div>
            <div class="mb-5">
                <label for="email" class="form-label fs-1">Email address</label>
                <input type="email" class="form-control border-0 border-bottom border-secondary border-2 rounded-0 fs-2 text-center fst-italic" name="email" maxlength="50" minlength="3" required>
            </div>
            <div class="mb-5">
                <label for="pass" class="form-label fs-1">Password</label>
                <input type="password" class="form-control border-0 border-bottom border-secondary border-2 rounded-0 fs-2 text-center fst-italic" name="pass" maxlength="20" minlength="5" required>
            </div>
            <div class="row justify-content-lg-between justify-content-center align-items-center my-5">
                <a href="./home" class="fs-3 text-decoration-none text-container-4 col-lg-6 col-12"><div>Already activated account?</div><div>Log in here.</div></a>
                <button type="submit" class="btn btn-primary fs-3 col-xl-2 mt-4 col-md-3 col-sm-5 col-6">Activate</button>
            </div>
        </form>
    </div>
</main>

<script type="text/javascript" src="../js/animations.js"></script>