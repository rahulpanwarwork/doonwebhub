<?php
require './connection.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sqlCheck = "SELECT * FROM userdetails WHERE email = '$email'";


$sql = "INSERT INTO userdetails (username, email, passkey) VALUES('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
