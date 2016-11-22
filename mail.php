<?php

$email = "webmaster@example.com";
$to = "dasflancer@gmail.com";
$sitename = "АГЕНТСТВО НЕДВИЖИМОСТИ";
$pagetitle = "Новая заявка с сайта \"$sitename\"";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);


$message = "
Имя: $name <br>
Телефон: $phone <br>
Email: $email <br>
";

$headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion() . "\r\n" .
	"Content-type: text/html; charset=\"utf-8\"";

mail($to, $pagetitle, $message, $headers);


