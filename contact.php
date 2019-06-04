<?php

if($_POST["submit"]) {
    $recipient="kaleraj.rk@gmail.com";
    $subject="Buy App review";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nemail: $email\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $name <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
