<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <script src="https://cdn.tiny.cloud/1/xftl4khk1g7s07pylv514af7o2py6oex4op7hgkuty8yi8x2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Email Notification</title>
</head>

<body style="background-color: #1b1b1b;">

    <?php
        include("validateEmail2.php");
    ?>

    <div class="container jumbotron">

        <!-- Form -->
        <form name="form" method="GET" action="validateEmail2.php">
            
            <!-- Activity Title -->
            <center class="mb-5">
                <h1 class="PHTW mb-4">EMAIL <span class="PHTO">NOTIFICATION</span></h1>
                <h6 class="PHTW">ACTIVITY 5</h6>
            </center>

            <!-- Alert message if email is sent or not -->
            <?php
                if (isset($_SESSION['alert'])) :
            ?>
                <!-- ALERT MESSAGE -->
                <div class="alert alert-<?= $_SESSION['alert_type'] ?>">
                    <?php
                    echo $_SESSION['alert'];
                    unset($_SESSION['alert']);
                    ?>
                </div>
            <?php endif ?>

            <!-- Email -->
            <div class="input-group mb-3">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required" autofocus>
            </div>

            <!-- Password -->
            <div class="input-group mb-3">
                <input pattern="^(?=.*[A-Za-z])(?=.*\d).{8,}$" type="password" id="password" class="form-control mb-1" name="password" placeholder="Password" required="required">
                <span class="text-light font-weight-light text-uppercase text-center" style="width: 100%;font-size:x-small;">Atleast 8 characters with a mixture of atleast 2 numbers</span>
            </div>

            <!-- Send Button -->
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" value="Send Email" class="btn btn-block btn-warning">
            </div>

        </form>
    </div>

</body>

</html>