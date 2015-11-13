<?php
header("Content-Type:text/json");
if($_POST['token'] === "1234567demo") {
$nickname = $_POST['nickname'];
unlink("src/authData/auth-".$nickname.".dat");
echo json_encode(array("SUCCES"=>"Deleted"));
}else {
	echo "NOT FOUND";
}
?>
