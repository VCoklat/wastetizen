<?php
$response = array();
require_once("db_connect.php"); //Establishing connection with our
if (isset($_POST['user_id'])){
    $user_id=verify($_POST['user_id']);
    $query2 ="INSERT INTO `data_asuransi`( `user_id`) VALUES  ('$user_id')";
	$result2 =mysqli_query($con, $query2);
	http_response_code(204);
}