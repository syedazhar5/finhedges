<?php

function getConnection()
{
  //for local web server 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "finhedges";

  //create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  //check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected Successfully"; 
}

?>