<?php
// phpinfo();
header("Content-Type:text/plain");
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require "src/snapchat.php";

$username = ""; // Your snapchat username
$password = ""; // Your snapchat password

$gEmail   = ""; // Gmail account
$gPasswd  = ""; // Gmail account password

$debug = true; // Set this to true if you want to see all outgoing requests and responses from server

$casperKey      = "4232cf886ff2d2c1747d40adfab409f0"; // Casper API Key
$casperSecret   = "b47a666ce0fefb90de058a8a38f01ff2"; // Casper API Secret

$snapchat = new Snapchat($username, $gEmail, $gPasswd, $casperKey, $casperSecret, $debug);


//Login to Snapchat with your username and password
$snapchat->login($password);


echo "My friends: ";
$friends = $snapchat->getFriends();

print_r($friends);
hhh

echo "Good";
?>
