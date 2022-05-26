<?php

include('connect.php');
$conn = getConnection();  

//create variables
$name =htmlspecialchars(stripslashes($_POST['name']));
$contact =htmlspecialchars(stripslashes($_POST['contact']));
$email =htmlspecialchars(stripslashes($_POST['email']));
$password =htmlspecialchars(stripslashes($_POST['password']));

$sql = "INSERT INTO registration_form (name,contact,email,password) VALUES ('$name', '$contact', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo '<script> alert("task Updated Success fully");</script>';;
  header('refresh:3;url=index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>