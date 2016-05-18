<?php

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];




echo $firstName . "'s last name is " . $lastName . '<br>';


$tenceString = <<<IDK
My friend's name is $firstName, like many other people they also have a last name which is $lastName<br>
IDK;

echo $tenceString

?>