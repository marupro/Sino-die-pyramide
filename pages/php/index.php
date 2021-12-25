<?php
    $to="sinodiepyramiderestaurant.com";
    $subject="Email from My website";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $text=$_POST['text'];
    $headers.="Content-type: text/htm;\r\n";
    $headers.="from: $email";
    mail($to,$subject,$comment,$headers);
    echo'<div class=\"alert alert-success\"the email has been sent!</div>';
?>