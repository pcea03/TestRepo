<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="../css/style1.css">
 <title>Post Method</title>
</head>
<div id="form">
<h1>POST METHOD</h1>
 <body>
 
 <form action="post.php" method="post" class="input">
	 <p>Name</p>
    <input type="text" name="name" placeholder="Name" id="Name"><br>
	<p>Age</p>
	<input type="text" name="age" placeholder="Age" id="Age">
    <input type="submit" name=enter value="Enter">
</form>

<?php
    if(isset($_POST['name'], $_POST['age'])) {
		$name = htmlentities($_POST['name'], ENT_QUOTES, 'UTF-8');
		$age = (int)$_POST['age'];

		if($name=="" || $age==""){
			print "<p>Missing Name or Age, or the Age is invalid.</p>";
		}
		else {
		print "<p>You are {$name} and you are {$age} years old.</p>";
		}
	}
?>

<div>

  </body>

</html>


