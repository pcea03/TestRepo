<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>CRUD</title>
</head>

<body style="background-color: #1b1b1b;">
    <?php require_once 'process.php' ?>

    <!-- Include database -->
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'activity3_crud') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
    ?>

    <div class="container jumbotron">

        <!-- Activity Title -->
        <center class="mb-5">
            <h1 class="PHTW mb-4">CRUD <span class="PHTO">ACTIVITY</span></h1>
            <h6 class="PHTW">ACTIVITY 3</h6>
        </center>

        <!-- Printing action result message -->
        <?php
        if (isset($_SESSION['message'])) :
        ?>
            <!-- ALERT MESSAGE -->
            <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>

        <!-- Table for Datas -->
        <div clas="row justify-content-center">
            <table class="table table-responsive table-hover table-light">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Location</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <!-- Loop for selecting data from database -->
                <?php
                while ($row = $result->fetch_assoc()) :
                ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td class="text-center">
                            <a href="CRUD.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                <!-- end of loop -->
            </table>
        </div>

        <?php
        function pre_r($array)
        {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
        ?>

        <!-- Input Fields -->
        <div clas="row justify-content-center">
            <form action="process.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="name">Name</span>
                    <input type="text" name="name" class="form-control" placeholder="Enter your Name ..." aria-label="name" aria-describedby="name" value="<?php echo $name; ?>" required autofocus>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="location">Location</span>
                    <input type="text" name="location" class="form-control" placeholder="Enter your Location ..." aria-label="location" aria-describedby="location" value="<?php echo $location; ?>" required>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <?php
                    if ($update == true) :
                    ?>
                        <button type="submit" name="update" class="btn btn-block btn-info">Update</button>
                    <?php else : ?>
                        <button type="submit" name="save" class="btn btn-block btn-warning">Save</button>
                    <?php endif ?>
                </div>
            </form>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>