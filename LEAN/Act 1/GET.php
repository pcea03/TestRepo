<?php
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $age=$_POST['age'];
        }
?>
<html>
    <head>
        <style>
            body{
                background-color: cadetblue;
                text-align: center;
            }
            form{
                width: 100%;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>
    <body>

    <form action="POST.php" method="post">
        <h1>GET FORM</h>
        <br>
        <input type="text" name="name" placeholder="Name">
        <br>
        <input type="text" name="age" placeholder="Age">
        <br>
        <input type="submit" name="submit">
    </form>

    </body> 
</html>