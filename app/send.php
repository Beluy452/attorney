<?php

$recipient = "grinchenko.vladimir@gmail.com";
$site_name = "Повідомлення із форми зворотнього звязку";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$comment = trim($_POST["message"]);

$message = "Ім'я: $name \n Мило: $email \n Коммент: $comment";

mail($recipient,$site_name,$message,
"Content-type: text/plain; charset=\"utf-8\"\n From: $recipient");