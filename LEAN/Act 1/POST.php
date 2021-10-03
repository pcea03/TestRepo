<html>
  <body style="background-color: cadetblue;">
  <td width='80' style='text-align:center;'>
    <?php 
      $name = $_POST['name'];
      $age = $_POST['age'];
      echo "Your are {$name} and you are {$age} years old.";
    ?>
  </td>
</html>