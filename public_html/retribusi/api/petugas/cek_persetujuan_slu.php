<?php

$response = array();
require_once("db_connect.php"); //Establishing connection with our
if (isset($_POST['phone_number'])) {
	$phone = $_POST['phone_number'];
	$query = "SELECT COUNT(*) as jumlah FROM pedagang WHERE telp='$phone' ";
	$result = mysqli_query($con, $query); 
	$data=mysqli_fetch_assoc($result);
		if ( $data['jumlah']>0) {
		 http_response_code(204);
	    $response["status"] = 0;
	    $response["description"] = " Nomor Telp Ada";
	    
		}else {
	    // required post params is missing
	    http_response_code(404);
	    $response["status"] = 0;
	    $response["description"] = "No Telp Tidak Ada";
	   
	        
	    
        }
    //else echo "Failed to connect to MySQL: " . mysqli_connect_error($con);
}

//$size = mb_strlen(json_encode($response, JSON_NUMERIC_CHECK), '8bit')+5;
//header('Content-length: '.$size);
echo json_encode($response);
?>
