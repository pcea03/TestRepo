<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

  <title>CONTROL LOOPS</title>
</head>

<body style="background-color: #1b1b1b;">

  <div class="container jumbotron">
    <!-- Activity Title -->
    <center class="mb-5">
      <h1 class="PHTW mb-4">CONTROL <span class="PHTO">LOOPS</span></h1>
      <h6 class="PHTW">ACTIVITY 2</h6>
    </center>

      <?php
      // Row and Column length for printing
      $row_length = 9;
      $column_length = 11;

      // Print * for line and _ for space
      for($row = 1; $row <= $row_length; $row++){
        for ($column = 1; $column <= $column_length; $column++){
          if($column == 1 || ($column == 11 && ($row != 1 && $row != 5)) || (($row == 1 || $row == 5) && ($column > 1 && $column < 11))){
            echo "<span class='ASTERISK'>*</span>";
          }
          else{
            echo "<span>___</span>";
          }
        }
        echo "<br>";
      }
      ?>

  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>