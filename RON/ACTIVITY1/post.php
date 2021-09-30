<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">

  <title>POST METHOD</title>
</head>

<body style="background-color: #1b1b1b;">

  <div class="container jumbotron">
    <!-- Activity Title -->
    <center class="mb-5">
      <h1 class="PHTW mb-4">POST <span class="PHTO">METHOD</span></h1>
      <h6 class="PHTW">ACTIVITY 1</h6>
    </center>

    <?php
    // If naeme and age is set, variable $name and $age will hold the values from the inputs then print the values
    if (isset($_POST['name'], $_POST['age'])) {
      $name = $_POST['name'];
      $age = $_POST['age'];

      echo "<h3 class='mb-3' style='color: white;text-align:center;'>You are {$name} and you are {$age} years old.</h3>";
    }
    ?>

    <!-- Input Name -->
    <form action="post.php" method="post">
      <div class="input-group mb-3">
        <span class="input-group-text" id="name">Name</span>
        <input type="text" name="name" class="form-control" placeholder="Enter Name ..." aria-label="name" aria-describedby="name">
      </div>

      <!-- Input Age -->
      <div class="input-group mb-3">
        <span class="input-group-text" id="age">Age</span>
        <input type="number" name="age" class="form-control" placeholder="Enter Age  ..." aria-label="age" aria-describedby="age">
      </div>

      <!-- Submit Inputs -->
      <div class="d-grid gap-2 col-6 mx-auto">
        <input type="submit" class="btn btn-block btn-warning">
      </div>
    </form>

  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>