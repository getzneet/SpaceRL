<?php

include 'connectDB.php';

$id             = stripslashes(htmlspecialchars($_POST['id']));
$browser                 = stripslashes(htmlspecialchars($_POST['browser']));
$feedback              = stripslashes(htmlspecialchars($_POST['feedback']));


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO spaceRL_feedback (prolificID, browser, feedback) VALUES ('$prolificID', '$browser', '$feedback')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
