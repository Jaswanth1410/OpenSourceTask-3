<?php
$secret = $_POST["secret"];
$response = $_POST["responce"];
$url = "https://www.google.com/recaptcha/api/siteverify?secret="$secret"&response="$response;
$verify = file_get_contents($url);
echo $verify;
?>