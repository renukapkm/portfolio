<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="portfoliodb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

if(isset($_POST['name'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sub = $_POST['subject'];
  $msg = $_POST['msge'];
  $sql = "INSERT INTO `contact`(`contact_id`, `name`, `email`, `subject`, `message`) VALUES (Null,'$name','$email','$sub','$msg')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>