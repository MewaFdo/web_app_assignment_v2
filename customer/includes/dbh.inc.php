<?php 

$servername = "localhost";
$username = "mewan";
$password = "2rcnK6Nv-4FcDQJ";
$db_name = "signature_db";

$conn =  mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_errno()){
  echo "Connection Fialed";
  exit();
}

echo ""

?>
