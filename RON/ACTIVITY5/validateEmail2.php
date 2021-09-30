<?php

    // Session Starts
    session_start();

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/PHPMailer/src/Exception.php';
    require 'PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/src/SMTP.php';

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    // Function in Getting Browser Name
    function get_browser_name($user_agent){
        $t = strtolower($user_agent);
        $t = " " . $t;
        if (strpos($t, 'opera' ) || strpos($t, 'opr/') ) return 'Opera Browser' ;
        elseif (strpos($t, 'edge' ) ) return 'Microsoft Edge' ;
        elseif (strpos($t, 'chrome' ) ) return 'Google Chrome' ;
        elseif (strpos($t, 'safari' ) ) return 'Safari Browser' ;
        elseif (strpos($t, 'firefox' ) ) return 'Mozilla Firefox' ;
        elseif (strpos($t, 'msie' ) || strpos($t, 'trident/7')) return 'Internet Explorer';
        return 'Unkown';
    }

    // If email is set, Get email then send the message (Login Date, Login Time and Browser Used)
    if(isset($_GET['email'])){

        $mail = new PHPMailer(true);
        date_default_timezone_set("Asia/Manila");                       //Timezone
        $browser = get_browser_name($_SERVER['HTTP_USER_AGENT']);       //Browser
        
        //Server settings
        $mail->SMTPDebug = 0;                                       //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = "smtp.gmail.com";                       //Set the SMTP server to send through
        $mail->SMTPAuth   = TRUE;                                   //Enable SMTP authentication
        $mail->Username   = "ronald_delacruz@rcc.edu.ph";           //SMTP username
        $mail->Password   = "zgvbpgetspsjaksw";                     //SMTP password
        $mail->SMTPSecure = "tls";                                  //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
        //Recipients
        $email = $_GET['email'];
        $mail->AddAddress($email, "Ronald Vergel Dela Cruz");
        $mail->SetFrom("ronald_delacruz@rcc.edu.ph", "Ronald Vergel Dela Cruz");
        $mail->AddReplyTo("ronald_delacruz@rcc.edu.ph", "Ronald Vergel Dela Cruz");

        // Content
        $mail->IsHTML(true);
        $message =
            "<b>Login Date :</b> " . date("Y/m/d") .
            "<br> <b>Login Time :</b> " . date("h:i:s a") .
            "<br> <b>Browser :</b> " . $browser;
        $subject = "ACTIVITY 5 - EMAIL NOTIFICATION";
        $mail->Subject = $subject;
        $content = $message;

        $mail->MsgHTML($content);

        // Conditional Statements if email is sent succesfully or not
        if (!$mail->Send()) {
            $_SESSION['alert'] = "Error in Sending Notification!";
            $_SESSION['alert_type'] = "warning";
            header("location: EmailNotification.php");
        } else {
            $_SESSION['alert'] = "Notification Sent Succesfully!";
            $_SESSION['alert_type'] = "success";
            header("location: EmailNotification.php");
        }

    }
