<?php


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];


    $mailTo = "jared_garcia@aol.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have an email from ".$name;


    mail($mailTo, $headers, $message);
    header('Location: index.html');
}

?>

