<?php

$response = array();
require_once("db_connect.php"); //Establishing connection with our
if (isset($_POST['username']) && isset($_POST['password'])&& isset($_POST['phone_number'])) {
	$username = verify($_POST['username']);
	$phone = verify($_POST['phone_number']);
	$password = $_POST['password'];
	$password = password_hash($password, PASSWORD_DEFAULT);
	$query = "SELECT COUNT(*) as jumlah FROM pedagang WHERE telp='$phone' OR username='$username'";
	$result = mysqli_query($con, $query); 
	$data=mysqli_fetch_assoc($result);
		if ( $data['jumlah']>0) {
	    $response["status"] = 0;
	    $response["description"] = " Nomor handphone / Username sudah digunakan";
		}else {
	    // required post params is missing
	    $response["status"] = 1;
	    $response["description"] = "Pendaftaran Berhasil";
	    
	    $query2 ="INSERT INTO `pedagang`( `telp`, `username`, `password`) VALUES  ('$phone','$username','$password')";
	    $result2 =mysqli_query($con, $query2);
	        
	    
        }
    //else echo "Failed to connect to MySQL: " . mysqli_connect_error($con);
}

//$size = mb_strlen(json_encode($response, JSON_NUMERIC_CHECK), '8bit')+5;
//header('Content-length: '.$size);
echo json_encode($response);
?>
