<?php

require_once 'handlers.php';

$name = htmlspecialchars($_POST['comment']["name"]) ?? null;
$email = htmlspecialchars($_POST['comment']["email"]) ?? null;
$text = htmlspecialchars($_POST['comment']["text"]) ?? null;

date_default_timezone_set('Europe/Moscow');
$created_at = date('Y-m-d H:i:s');

sendComment($name, $email, $text, $created_at);

header('Location: /');
