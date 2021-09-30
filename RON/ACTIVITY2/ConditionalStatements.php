<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>CONDITIONAL STATEMENTS</title>
</head>

<body style="background-color: #1b1b1b;">

    <?php
        include("ConditionalProcess.php");
    ?>

    <div class="container jumbotron">

        <!-- Activity Title -->
        <center class="mb-5">
            <h1 class="PHTW">CONDITIONAL</h1>
            <h1 class="PHTO">STATEMENTS</h1>
            <h6 class="PHTW">ACTIVITY 2</h6>
        </center>

        <!-- Alert message if email is sent or not -->
        <?php
        if (isset($_SESSION['decision'])) :
        ?>
            <!-- ALERT MESSAGE -->
            <div class="alert text-center alert-<?= $_SESSION['decision_type'] ?>">
                <?php
                echo "<b>";
                echo $_SESSION['decision'];
                echo "</b>";
                unset($_SESSION['decision']);
                ?>
            </div>
        <?php endif ?>

        <!-- Form -->
        <form name="form" action="ConditionalProcess.php" method="GET">

            <!-- Input for Daughters Code -->
            <!-- J = General's Daughter and K = If not -->
            <div class="input-group mb-3">
                <span class="input-group-text bg-warning fw-bold" id="daughtersCode">DAUGTHER'S CODE</span>
                <select class="form-select" aria-label="Select Daughter's Code" name="daughtersCode" required autofocus>
                    <option selected disabled value="">SELECT DAUGTHER'S CODE</option>
                    <option value='J'>J - General's Daughter</option>
                    <option value='K'>K - Not a General's Daughter</option>
                </select>
            </div>

            <!-- Input for Wealth Code -->
            <!-- L = Rich and P = If not -->
            <div class="input-group mb-3">
                <span class="input-group-text bg-warning fw-bold" id="wealthCode">WEALTH CODE</span>
                <select class="form-select" aria-label="Select Wealth Code" name="wealthCode" required>
                    <option selected disabled value="">SELECT WEALTH CODE</option>
                    <option value='L'>L – Rich</option>
                    <option value='P'>P – Not Rich</option>
                </select>
            </div>

            <!-- Input for Appearance Code -->
            <!-- B = Beautiful and P = If not -->
            <div class="input-group mb-3">
                <span class="input-group-text bg-warning fw-bold" id="appearanceCode">APPEARANCE CODE</span>
                <select class="form-select" aria-label="Select Appearance Code" name="appearanceCode" required>
                    <option selected disabled value="">SELECT APPEARANCE CODE</option>
                    <option value='B'>B – Beautiful</option>
                    <option value='P'>P – Not Beautiful</option>
                </select>
            </div>


            <!-- Submit button -->
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn btn-block btn-warning">
            </div>

        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>

<script>
    // brings back the page from it's original state.
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>