<?php
header("Content-Type:text/json");
require "src/snapchat.php";

if($_POST['token'] === "1234567demo") {
$username =  $_POST['username']; // Your snapchat username
$password =  $_POST['password']; // Your snapchat password
$gEmail   =  $_POST['gMail']; // Gmail account
$gPasswd  = $_POST['gPasswd']; // Gmail account password
$debug = false; // Set this to true if you want to see all outgoing requests and responses from server

$casperKey      = "4232cf886ff2d2c1747d40adfab409f0"; // Casper API Key
$casperSecret   = "b47a666ce0fefb90de058a8a38f01ff2"; // Casper API Secret

$snapchat = new Snapchat($username, $gEmail, $gPasswd, $casperKey, $casperSecret, $debug);

$snapchat->login($password);

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["Image"]["name"]);

  if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {

  }

$send = $snapchat->send($target_file, $_POST['to'], "Photo", $_POST['time']);;

echo json_encode(array("SUCCES"=>$send));
} else {
	echo "NOT FOUND";
}
?>
