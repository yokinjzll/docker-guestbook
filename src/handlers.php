<?php


$dbname = getenv('MYSQL_DATABASE');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASS');


function getAllComments()
{
    global $dbname, $username, $password;
    $arr = [];

    try {
        $pdo = new PDO("mysql:host=db;dbname=$dbname", $username, $password);
    } catch (Exception $e) {
        echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
    }

    $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

    $sql = "SELECT * FROM comments ORDER BY id DESC";

    try {
        // $pdo->query($sql);
        foreach ($pdo->query($sql) as $row) {
            array_push($arr, [
                'username' => $row['username'],
                'comment_text' => $row['comment_text'],
                'created_at' => $row['created_at']]);
        }
    } catch(Exception $e) {
        echo "Error: " . $e;
    }

    $pdo = null;

    return $arr;
}


function sendComment($name, $email, $text, $created_at)
{
    global $dbname, $username, $password;

    try {
        $pdo = new PDO("mysql:host=db;dbname=$dbname", $username, $password);
    } catch (Exception $e) {
        echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
    }

    $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

    $sql = "INSERT INTO comments (username, email, comment_text, created_at)
    VALUES (\"$name\", \"$email\", \"$text\", \"$created_at\")";

    try {
        $pdo->query($sql);
    } catch(Exception $e) {
        echo "Error: " . $e;
    }

    $pdo = null;
}
