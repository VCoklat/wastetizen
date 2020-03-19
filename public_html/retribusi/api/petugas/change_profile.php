<?php
$response = array();
$user_exist = 0;
$telp_exist = 0;
require_once("db_connect.php"); //Establishing connection with our
if (isset($_POST['user_id'])&&isset($_POST['password_baru'])&&$_POST['password_baru']!=NULL) {
	$username = verify($_POST['username']);
 	$password_lama = verify($_POST['password_lama']);
 	$password_baru = $_POST['password_baru'];
	$user_id = verify($_POST['user_id']);
	$photo = $_POST['photo'];
	
	$query = "SELECT password from petugas where userid ='$user_id' LIMIT 1";
	if ($result = mysqli_query($con, $query)) {
		if (mysqli_num_rows($result) > 0) {
		    $data=mysqli_fetch_array($result);
	        if (password_verify($password_lama,$data['password'])) {
	            $password_baru=password_hash($password_baru, PASSWORD_DEFAULT);
	            $query = "UPDATE `petugas` SET `password`= '$password_baru' WHERE userid='$user_id'";
        	    if ($result1 =mysqli_query($con, $query) ){
        		    $response["status"] = 1;
        		    $response["description"] = "Password Berhasil Diubah"; // ini berubah
        	    } echo mysqli_error($con);
	        }else {
        	    // required post params is missing
        	    $response["status"] = 4;
        		$response["description"] = "Password / User ID Sebelumnya Tidak sama"; // ini berubah
            }
		}
	}
} else if (isset($_POST['user_id']) ) {
	$username = verify($_POST['username']);
	$user_id = verify($_POST['user_id']);
	$password = verify($_POST['password_lama']);
	$photo = $_POST['photo'];
	$email = $_POST['email'];
	$telp = $_POST['phone_number'];
	$query = "SELECT password from petugas where userid ='$user_id' LIMIT 1";
	if ($result = mysqli_query($con, $query)) {
		if (mysqli_num_rows($result) > 0) {
		    $data=mysqli_fetch_array($result);
		    if (password_verify( $password,$data['password'])) {
	            $query = "UPDATE `petugas` SET `username`= '$username',`email`= '$email', `profile_pic`='$photo',`telp`= '$telp' WHERE userid='$user_id'";
        	    if ($result1 =mysqli_query($con, $query) ){
        		    $response["status"] = 1;
        		    $response["description"] = "Profile Berhasil Berubah"; // ini berubah
        	    } echo mysqli_error($con);
		    }
		    else {
        	    // required post params is missing
        	    $response["status"] = 4;
        		$response["description"] = "Password / User ID Sebelumnya Tidak sama"; // ini berubah
            }
	        }else {
        	    // required post params is missing
        	    $response["status"] = 4;
        		$response["description"] = "User ID Sebelumnya Tidak sama"; // ini berubah
            }
	}
}
echo json_encode($response);
?>
