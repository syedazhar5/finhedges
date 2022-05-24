<?php
include_once('connect.php');
$conn = getConnection();

//create variables
$p_name = $_POST['p_name'];
$contact_no = $_POST['contact'];
$email_address = $_POST['email_address'];
$password = $_POST['password'];

$sql = "INSERT INTO registration_form(p_name,contact,email_address,password) VALUES ('$p_name','$contact','$email_address','$password')";

if ($_conn->query($sql) === TRUE) {
  echo "Registration Successful";
  header('refresh:3;url=index.html');
} else {
  echo "Error: " . $sql . "<br>" . $_conn->error;
}
$_conn->close();
?>