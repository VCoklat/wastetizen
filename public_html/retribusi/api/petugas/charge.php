<?php
$response = array();
$user_exist = 0;
$telp_exist = 0;
require_once("db_connect.php"); //Establishing connection with our
if (isset($_POST['user_id']) && isset($_POST['charge'])) {
  	$user_id=$_POST['user_id'];
  	$charge = $_POST['charge'];
  	$transaction_id= $_POST['transaction_id'];
  	$date = $_POST['date'];
  	$response["status"] = 1;
	$response["description"] = "Saldo telah terpotong";
	echo json_encode($response);
}
?>