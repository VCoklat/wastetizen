<?php
$response = array();
$user_exist = 0;
$telp_exist = 0;
require_once("db_connect.php"); //Establishing connection with our
if (isset($_POST['user_id'])&&isset($_POST['password_lama'])&&isset($_POST['password_baru']) ) {
	$username = verify($_POST['username']);
 	$password_lama = verify($_POST['password_lama']);
 	$password_baru = verify($_POST['password_baru']);
	$user_id = verify($_POST['user_id']);
	$photo = $_POST['photo'];
	
	$query = "SELECT password from petugas where userid ='$user_id' LIMIT 1";
	if ($result = mysqli_query($con, $query)) {
		if (mysqli_num_rows($result) > 0) {
		    $data=mysqli_fetch_array($result);
	        if (password_verify( $password_lama,$data['password'])) {
	            $query = "UPDATE `petugas` SET `username`= '$username', `profile_pic`='$photo' WHERE userid='$user_id'";
        	    if ($result1 =mysqli_query($con, $query) ){
        		    $response["status"] = 1;
        		    $response["description"] = "Profile Berhasil Berubah"; // ini berubah
        	    } echo mysqli_error($con);
	        }else {
        	    // required post params is missing
        	    $response["status"] = 0;
        		$response["description"] = "Password / User ID Sebelumnya Tidak sama"; // ini berubah
            }
		}
	}
	
//     $query = "SELECT * from petugas where userid ='$user_id' LIMIT 1";
// 	if ($result = mysqli_query($con, $query)) {
// 		if (mysqli_num_rows($result) > 0) {
		    
		    
// 		}
//     }
    

}
echo json_encode($response);
?>
