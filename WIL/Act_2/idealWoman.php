<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ideal Woman</title>
  </head>
  <body>

  <h2>Mr. Rufrecks's Ideal Woman</h2>
  <form action="idealWoman.php" method="post">
    <p>DAUGHTER CODE:</p>
    <input type="radio" name="stat" id="d_codeJ" value="genD" autocomplete="off">
    <label for="d_codeJ">General's Daughter</label><br>
    <input type="radio" name="stat" id="d_codeK" value="notGenD" autocomplete="off">
    <label for="d_codeK">Not A General's Daughter</label>

    <br>

    <p>WEALTH CODE:</p>
    <input type="radio" name="w_stat" id="w_codeL" value="rich" autocomplete="off">
    <label for="w_codeL">Rich</label><br>
    <input type="radio" name="w_stat" id="w_codeP" value="notRich" autocomplete="off">
    <label for="w_codeP">Not Rich</label>
    <br>

    <p>APPEARANCE CODE:</p>
    <input type="radio" name="a_stat" id="a_codeB" value="beau" autocomplete="off">
    <label for="a_codeB">Beautiful</label><br>
    <input type="radio" name="a_stat" id="a_codeP" value="notBeau" autocomplete="off">
    <label for="a_codeP">Not Beautiful</label><br><br>
    <input type="submit" name=enter value="Enter">
  </form>
  <br>
  <?php
    if (isset($_POST['stat'])){
      $status = $_POST['stat'];
    }else {
      $status = NULL;
    }

    if (isset($_POST['w_stat'])){
      $w_status = $_POST['w_stat'];
    }else {
      $w_status = NULL;
    }

    if (isset($_POST['a_stat'])){
    $a_status = $_POST['a_stat'];
    }else {
      $a_status = NULL;
    }

    if (($status == NULL) && ($w_status == NULL) && ($a_status == NULL)) {
      echo "";
    }
    else if (($status == "notGenD") && ($w_status == "rich") && ($a_status == "beau")) {
      echo "MARRY HER!";
    }
    else if ((($status == "notGenD") && ($w_status == "notRich") && ($a_status == "beau")) || (($status == "notGenD") && ($w_status == "rich") && ($a_status == "notBeau"))) {
      echo "BE A FRIEND TO HER!!";
    }
    else if ((($status == "genD") && (($w_status == "notRich") && ($a_status == "notBeau"))) ||
    (($status == "genD") && (($w_status == "rich") && ($a_status == "beau"))) ||
    (($status == "notGenD") && (($w_status == "notRich") && ($a_status == "notBeau")))) {
      echo "STAY AWAY FROM HER!!!";
    }
    else {
      echo "Invalid choice!! <br> Please makes sure that <br> you select one choice from each Categories";
    }
  ?>
  </body>
</html>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
