<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

  <title>Send Email</title>
</head>
<body style="background-color: #1b1b1b;">

    <?php
        include("validateEmail.php");
    ?>

  <div class="container jumbotron">
    
    <!-- Form -->
    <form name="form" method="GET" action="validateEmail.php">

      <!-- Activity Title -->
      <center class="mb-5">
        <h1 class="PHTW mb-4">SEND <span class="PHTO">EMAIL</span></h1>
        <h6 class="PHTW">ACTIVITY 4</h6>
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
        <span class="input-group-text" id="t_email">Email</span>
        <input type="email" id="email" name="email" class="form-control" placeholder="Enter Recipient's Email ..." required="required" autofocus>
      </div>

      <!-- Subject -->
      <div class="input-group mb-3">
        <span class="input-group-text" id="t_subject">Subject</span>
        <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter Email's Subject ..." required="required">
      </div>

      <!-- Message -->
      <div class="input-group mb-3">
        <span class="input-group-text" id="t_message">Message</span>
        <textarea id="message" name="message" class="form-control" placeholder="Enter your Message ..." rows="10" cols="1" required="required"></textarea>
      </div>

      <!-- Send Button -->
      <div class="d-grid gap-2 col-6 mx-auto">
        <input type="submit" name="send" value="Send Email" class="btn btn-block btn-warning">
      </div>

    </form>

  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>