<?php

include('connect.php');  

//create variables
$name =htmlspecialchars(stripslashes($_POST['name']));
$contact =htmlspecialchars(stripslashes($_POST['contact']));
$email =htmlspecialchars(stripslashes($_POST['email']));
$password =htmlspecialchars(stripslashes($_POST['password']));

mysqli_query($conn, "INSERT INTO registration_form (name, contact, email, password) VALUES('$name', '$contact', '$email', '$password')");

if (mysqli_affected_rows($conn) > 0)
 {
  echo '<script> alert("Registration Successfully")</script>';
  header('refresh:3;url=index.php');
} else {
  echo "mysql_error($conn)";
}

?>