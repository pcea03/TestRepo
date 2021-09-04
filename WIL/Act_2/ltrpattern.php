<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $i=9;
    for($x=1; $x<=$i; $x++)
    {
    	for($y=1; $y<=$i; $y++)
    	{
        if ((($y==1 || $y==9) && $x<=5) || (($y==1 || $y==5 || $y==9) && $x>=5) || $x>=$i) {
          echo "* ";
        }
    		else
    		{
    			echo ".. ";
    		}
    	}
      echo "<br>";
    }
     ?>
  </body>
</html>
