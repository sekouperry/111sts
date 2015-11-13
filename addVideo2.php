<?php
header("Content-Type:text/plain");
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require "src/snapchat.php";

$username = "jonatan.ive"; // Your snapchat username
$password = "12345678cat"; // Your snapchat password
$gEmail   = "bestgoolgemail@gmail.com"; // Gmail account
$gPasswd  = "123456cat"; // Gmail account password
$debug = true; // Set this to true if you want to see all outgoing requests and responses from server

$snapchat = new Snapchat($username, $gEmail, $gPasswd, $debug);

//Login to Snapchat with your username and password
$snapchat->login($password);



$send = $snapchat->send("1.mov", "banana.apps99", "", 5);;



//$snapchat->addFriend("banana.apps99");
print_r($send);
echo "Good";
?>
