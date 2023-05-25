<main class="my-5">
    <h1 class="text-container-4 text-center d-flex justify-content-center my-5 display-4">You can manage your orders here.</h1>
    <div id="resp" class="my-5 text-center"></div>
    <form class="text-container-6 d-flex justify-content-sm-end justify-content-center my-5 me-5 fst-italic text-center" action="./datamanipulation/listdata.php" method="POST">
        <label for="lines" class="fs-3">Display &nbsp; </label>
        <input type="number" class="respwidth border-0 border-bottom border-secondary border-2 rounded-0 fs-3 text-center mx-1" placeholder="50" name="lines" required>
        <label for="lines" class="fs-3">&nbsp; lines.</label>
        <button type="submit" class="btn btn-primary fs-4 ms-5">Submit</button>
    </form>
    <div class="mt-5 text-container-5">
        <div>
        </div>
        <div class="container" id="roll">
            <table class="table table-striped border border-2">
                <thead>
                    <tr class="bg-primary-subtle">
                        <th scope="col">ID</th>
                        <th scope="col">Product</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Price</th>
                        <th scope="col" colspan="2">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if (isset($_SESSION["data"]))
                        {
                            foreach ($_SESSION["data"] as $x)
                            {
                                echo '<tr><th scope="row">' . $x[0] . '</th><td>' . $x[1] . '</td><td>' . $x[2] . '</td><td>' . $x[3] . '</td><td>' . $x[4] . '</td><td><a href="#" data-email="' . $x[4] . '" class="text-primary icon-link hovercursor" onclick="sendMail(this)">send email</a></td></tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<script type="text/javascript"  src=https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js></script>
<script type="text/javascript" src="../js/mailsystem.js"></script>
<script type="text/javascript" src="../js/animations.js"></script>