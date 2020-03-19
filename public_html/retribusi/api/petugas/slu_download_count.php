<?php
$response = array();
require_once("db_connect.php"); //Establishing connection with our
if (isset($_POST['user_id'])&& isset($_POST['foto_ktp'])){
    $user_id=verify($_POST['user_id']);
    $foto_ktp=$_POST['foto_ktp'];
    $query = "SELECT id_pedagang  from pedagang where id_pedagang ='$user_id'";
	if ($result = mysqli_query($con, $query)) {
	    if (mysqli_num_rows($result) > 0) {
	        $query = "UPDATE `pedagang` SET foto_ktp='$foto_ktp' WHERE id_pedagang='$user_id'";
    	    if ($result1 =mysqli_query($con, $query) ){
                $query2 ="INSERT INTO `data_asuransi`( `user_id`) VALUES  ('$user_id')";
            	$result2 =mysqli_query($con, $query2);
            	http_response_code(204);
    	    }
	    }
	}    
}