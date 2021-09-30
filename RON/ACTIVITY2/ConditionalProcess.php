<?php

// Session Starts
session_start();


// Checking if they already set the values for each category
if(isset($_GET['daughtersCode'],$_GET['wealthCode'],$_GET['appearanceCode'])){

    $daugthersCode = $_GET['daughtersCode'];
    $wealthCode = $_GET['wealthCode'];
    $appearanceCode = $_GET['appearanceCode'];

    // Conditional Statements
    // If she is a general's daughter or Beautiful and Rich but not a general's daughter then marry her 
    if (($daugthersCode == 'J') || ($wealthCode == 'L' && $appearanceCode == 'B')) {
        $_SESSION['decision'] = "MARRY HER!";
        $_SESSION['decision_type'] = "success";
        header("location: ConditionalStatements.php");
    // If she is not a general's daughter and she is beautiful but not rich or she is rich but not beautiful then be friend to her
    } else if (($daugthersCode == 'K' && $wealthCode == 'L' && $appearanceCode == 'P') || ($daugthersCode == 'K' && $wealthCode == 'P' && $appearanceCode == 'B')) {
        $_SESSION['decision'] = "BE A FRIEND TO HER";
        $_SESSION['decision_type'] = "info";
        header("location: ConditionalStatements.php");
    // If she is not a general's daughter and she is not beautiful and rich then stay away from her
    } else if($daugthersCode == 'K' && $wealthCode == 'P' && $appearanceCode == 'P') {
        $_SESSION['decision'] = "STAY AWAY MADER PADER";
        $_SESSION['decision_type'] = "danger";
        header("location: ConditionalStatements.php");
    }


}
?>