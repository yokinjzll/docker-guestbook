<?php

require_once 'handlers.php';

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

<?php

$comments = getAllComments();

foreach($comments as $row) { ?>
<div class="comment">
    <div class="row comment-header bg-com-head">
        <p class="header-text"><?php echo $row['username']; ?></p>
        <p class="time-text"><?php echo $row['created_at']; ?></p>
    </div>
    <div class="row bg-com-txt">
        <p class="comment-text"><?php echo $row['comment_text']; ?></p>
    </div>
</div>
<?php } ?>

</body>
</html>