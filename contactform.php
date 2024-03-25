<?php

if (isset($_POST['submit'])) {
    $name = $__POST['name']
    $subject = $__POST['email']
    $number = $__POST['phone']
    $message = $__POST['message']

    $mailTo = "test@coachcharityandcreatives.co.za";
    $headers = "From: ".$subject;
    $txt = "you have received an email from" .$name.".\n\n".$message;
    
    mail($mailTo, $name,$txt,$headers);
    header("Location: indec.html?mailsend");

}

