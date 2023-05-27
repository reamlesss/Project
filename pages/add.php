<?php
    if ($_SESSION["logged"] != "true")
    {
        die();
    }
?>

<main class="my-5 container">
    <h1 class="text-container-4 text-center d-flex justify-content-center my-5 display-4">You add orders manually here.</h1>
    <?php
        if (isset($_SESSION['status'])) {
            if ($_SESSION["status"] == "true") {
                echo "<p class='mb-5 fs-1 text-success text-center'>Order has been successfully added!</p>";
            }
            else {
                echo "<p class='mb-5 fs-1 text-success text-center'>There has been an error with adding order!</p>";
            }
            unset($_SESSION['status']);
        }
    ?>
    <form class="text-container-6 d-block justify-content-center my-5 text-center border border-2 border-secondary p-5 rounded-4" action="./datamanipulation/adddata.php" method="POST">
        <div class="mb-5 row">
            <label for="name" class="form-label fs-1 col-md-3 col-12">Product:</label>
            <input type="text" class="border-0 col-md-9 border-bottom border-secondary border-2 rounded-0 fs-2 text-center fst-italic" name="name" required>
        </div>
        <div class="mb-5 row">
            <label for="number" class="form-label fs-1 col-md-3 col-12">Amount:</label>
            <input type="number" class="border-0 col-md-9 border-bottom border-secondary border-2 rounded-0 fs-2 text-center fst-italic" name="number" required>
        </div>
        <div class="mb-5 row">
            <label for="price" class="form-label fs-1 col-md-3 col-12">Price:</label>
            <input type="number" step="0.01" class="border-0 col-md-9 border-bottom border-secondary border-2 rounded-0 fs-2 text-center fst-italic" name="price" required>
        </div>
        <div class="mb-5 row">
            <label for="email" class="form-label fs-1 col-md-3 col-12">Email:</label>
            <input type="email" class="border-0 col-md-9 border-bottom border-secondary border-2 rounded-0 fs-2 text-center fst-italic" name="email" required>
        </div>
        <div class="row justify-content-lg-between justify-content-center align-items-center mt-4">
            <div class="col-lg-6 col-12"></div>
            <button type="submit" class="btn btn-primary fs-3 col-xl-2 col-md-3 col-sm-5 col-6">Submit</button>
        </div>
    </form>
</main>