<?php
error_reporting(E_ALL);
$from = "noreply@zosand.fr";
$to = "webmaster@zosand.fr";
$subject = "";
$message = "";
$headers = "From:" . $from;
mail($to, $subject, $message, $headers);
header("Location: https://${$_SERVER['HTTP_HOST']}/contact");