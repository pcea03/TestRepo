<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ideal Woman</title>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
        <h2>Mr. Rufrecks's Ideal Woman</h2>
    </header>
    <main>
        <div class="wrapper">
          <form action="idealWoman.php" method="post">
            <!-- stat stands for status or daughter status-->
            <!-- value of 'J' if generals daugter and 'K' if not -->
            <p class="">DAUGHTER STATUS</p>
            <label class="container">General's Daughter
              <input type="radio" name="stat" value="J" autocomplete="off">
              <span class="checkmark"></span>
            </label>
            <label class="container">Not A General's Daughter
              <input type="radio" name="stat" value="K" autocomplete="off">
              <span class="checkmark"></span>
            </label>

            <!-- w_stat stands for wealth status-->
            <!-- value of 'L' if rich and 'P' if not rich -->
            <p>WEALTH STATUS</p>
            <label class="container">Rich
              <input type="radio" name="w_stat" value="L" autocomplete="off">
              <span class="checkmark"></span>
            </label>
            <label class="container">Not Rich
              <input type="radio" name="w_stat" value="P" autocomplete="off">
              <span class="checkmark"></span>
            </label>

            <!-- a_stat stands for apparance status-->
            <!-- value of 'B' if beautiful and 'P' if not -->
            <p>APPEARANCE</p>
            <label class="container">Beautiful
              <input type="radio" name="a_stat" value="B" autocomplete="off">
              <span class="checkmark"></span>
            </label>
            <label class="container">Not Beautiful
              <input type="radio" name="a_stat" value="P" autocomplete="off">
              <span class="checkmark"></span>
            </label>
            <input type="submit" name=enter value="SUBMIT" class="button">
          </form>
        </div>
      </section>
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

        $message = NULL;
        //return nothing.
        if (($status == NULL) && ($w_status == NULL) && ($a_status == NULL)) {
          echo "";
        }
        //condition to marry her ideal Woman.
        //must not be a Generals daughter, rich and beautiful.
        else if (($status == "K") && ($w_status == "L") && ($a_status == "B")) {
          $message = "MARRY HER!";
        }
        //condition to if she will befriend her.
        //must not be a Generals daughter and rich or beautiful.
        else if ((($status == "K") && ($w_status == "P") && ($a_status == "B")) || (($status == "K") && ($w_status == "L") && ($a_status == "P"))) {
          $message = "BE A FRIEND TO HER!!";
        }
        //condition to stay away from her.
        //she is a Generals daughter.
        // she is not rich and not beautiful.
        else if ((($status == "J") && (($w_status == "P") && ($a_status == "P"))) ||
        (($status == "J") && (($w_status == "L") || ($a_status == "B"))) ||
        (($status == "K") && (($w_status == "P") && ($a_status == "P")))) {
          $message = "STAY AWAY FROM HER!!!";
        }
        // if there is a missing choice or unselected choice.
        else {
          $message = "Invalid choice!! <br> Please makes sure that  you <br>select one choice from each Categories";
        }
      ?>
      <div class="wrapper">
        <div class="decision">
          <h2>Decision</h2>
          <div class="answer">
            <p><?php echo $message; ?></p>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>

<script>
  // brings back the page from it's original state.
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
