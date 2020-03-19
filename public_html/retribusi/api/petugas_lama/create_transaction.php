<?php
$response = array();
require_once("db_connect.php"); //Establishing connection with our
if (isset($_POST['user_id']) && isset($_POST['market_id'])) {
  	$user_id=$_POST['user_id'];
  	$market_id = $_POST['market_id'];
  	$response['retributions'][]=array(
  	    'id' => "R001",
        'nama' => "kebersihan",
        'harga' => "3000.00",
        'timing' => "daily",
        'for' => "2019-09-15",
        );
  	$response["status"] = 1;
  	$response["transaction_id"] = "TR001";
//	$response["description"] = "Saldo telah terpotong";
	echo json_encode($response);
}
?>