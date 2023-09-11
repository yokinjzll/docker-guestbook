<?php

session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GuestBook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Гостевая книга</h1>

<hr>

<div>
    <p>Оставить комментарий: </p>
    <form action="sendComment.php"  method="post" class="form">
        <label for="name">Имя:</label>
        <input class="form-item" type="text" name="comment[name]" id="nameInput" placeholder="Имя">
        <label for="emailInput">Почта:</label>
        <input class="form-item" type="email" name="comment[email]" id="emailInput" placeholder="E-mail">
        <label for="commentText">Комментарий:</label>
        <textarea class="form-item" name="comment[text]" id="commentInput" cols="30" rows="10" placeholder="Всем привет..."></textarea>
        <input type="submit" value="Отправить">
    </form>
</div>

<hr>

<h2>Комментарии посетителей:</h2>

<div class="comment">
    <div class="row comment-header bg-com-head">
        <p class="header-text">Name</p>
        <p class="time-text">15.08.23 15:23</p>
    </div>
    <div class="row bg-com-txt">
        <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur culpa cumque dicta, dignissimos distinctio dolore esse, exercitationem laboriosam magni nihil nobis quae quaerat reprehenderit repudiandae sunt tempora. Commodi, ipsa.</p>
    </div>
</div>

<div class="comment">
    <div class="row comment-header bg-com-head">
        <p class="header-text">Name</p>
        <p class="time-text">12.08.23 10:54</p>
    </div>
    <div class="row bg-com-txt">
        <p class="comment-text">Consectetur expedita in iste laudantium nisi, pariatur soluta? At autem dolore eaque facilis fugiat hic, incidunt maiores maxime odio, sequi soluta, velit.</p>
    </div>
</div>

</body>
</html>