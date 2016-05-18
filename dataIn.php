<?php
include_once('connect.php');


$firstName = $_POST['fname'];
$lastName = $_POST['lname'];


if (mysql_query("INSERT INTO user VALUES ('$firstName', '$lastName')"))
    echo "Inserted";
  else 
    echo "Failed"
?>