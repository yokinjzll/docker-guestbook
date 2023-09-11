<?php



$name = htmlspecialchars($_POST['comment']["name"]) ?? null;
$email = htmlspecialchars($_POST['comment']["email"]) ?? null;
$text = htmlspecialchars($_POST['comment']["text"]) ?? null;

date_default_timezone_set('Europe/Moscow');
$created_at = date('Y-m-d H:i:s');


echo $name . " " . $email . " " . $text . " " . $created_at;


//  отправить эти данные в бд

// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

