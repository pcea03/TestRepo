<?php
if(isset($_POST['submit'])){
    $dauther_code = $_POST['dauther_code'];
    $wealth_code = $_POST['wealth_code'];
    $appearance_code = $_POST['appearance_code'];
    switch($dauther_code){
        case "J":
            echo "STAY AWAY FORM HER";
            break;
        case "K":
            if($wealth_code == "L" && $appearance_code == "B"){
                echo "MARRY HER";
            }elseif($wealth_code == "P" && $appearance_code == "B" || $wealth_code == "L" && $appearance_code == "P"){
                echo "BE A FRIEND TO HER";
            }elseif($wealth_code == "P" && $appearance_code == "P"){
                echo "STAY AWAY FORM HER";
            }else{
                
            }
    }
}

?>
<html>
    <body>
        <form action="ConditionalStatements.php" method="POST">
        <p> Input J – general’s daughter<br>
            Input K – not a general’s daughter</p>
        <input type="text" name="dauther_code">
        <br>
        <p> Input L – rich<br>
            Input P – not rich</p>
        <input type="text" name="wealth_code">
        <br>
        <p> Input B – beautiful<br>
            Input P – not beautiful</p>
        <input type="text" name="appearance_code">
        <br>
        <input type="submit" name="submit">
    </body>
</html>