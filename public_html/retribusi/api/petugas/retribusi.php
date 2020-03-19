<?php
$response = array();
require_once("db_connect.php"); //Establishing connection with our
if (isset($_POST['user_id']) && isset($_POST['market_id'])) {
  	$user_id=$_POST['user_id'];
  	$market_id = $_POST['market_id'];
  	$response['retribusi'][]=array(
  	    'id' => "R001",
        'nama' => "kebersihan",
        'harga' => "3000.00",
        'timing' => "daily",
        );
  	$response["status"] = 1;
	//$response["description"] = "Saldo telah terpotong";
} else {
    $response["status"] = 1;
	$response["description"] = "Data belum lengkap";
}
	echo json_encode($response);
?>