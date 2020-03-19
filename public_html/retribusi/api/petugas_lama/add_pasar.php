<?php
$response = array();
$user_exist = 0;
$telp_exist = 0;
require_once("db_connect.php"); //Establishing connection with our
if (isset($_POST['name'])&&isset($_POST['latitude'])&&isset($_POST['longitude'])&&isset($_POST['address'])&&isset($_POST['user_id']) ) {
    $name = verify($_POST['name']);
    $user_id = verify($_POST['user_id']);
    $address = verify($_POST['address']);
    $latitude = verify($_POST['latitude']);
    $longitude = verify($_POST['longitude']);
	$query = "SELECT COUNT(*) as jumlah FROM pasar WHERE name='$name'";
	$result = mysqli_query($con, $query); 
	$data=mysqli_fetch_assoc($result);
		if ( $data['jumlah']>0) {
	    $response["status"] = 0;
	    $response["description"] = "Pasar sudah ada";
		}else {
		   $id=generateRandomString(); 
	    // required post params is missing
	    $query2 ="INSERT INTO `pasar`( `name`, `latitude`, `longitude`,`id_pasar`,`alamat`) VALUES  ('$name','$latitude','$longitude','$id','$address')";
	    $result2 =mysqli_query($con, $query2);
	    $last_id = mysqli_insert_id($con);
	    $query2 = "SELECT users_id from petugas where userid ='$user_id'";
        if ($result = mysqli_query($con, $query2)) {
    		if (mysqli_num_rows($result) > 0) {
    		    $data=mysqli_fetch_array($result);
    		    $id_petugas=$data['users_id'];
    		} 
        }
	    $query2 ="INSERT INTO `pasar_relation`( `petugas_id`,`pasar_id`) VALUES  ('$id_petugas','$last_id')";
	    $result2 =mysqli_query($con, $query2);
	    $response["status"] = 1;
	    $response["description"] ="Pasar Berhasil Didaftarkan";     
	    
        }
    //else echo "Failed to connect to MySQL: " . mysqli_connect_error($con);
}
else {
    $response["status"] = 0;
	$response["description"] = "Data Belum Lengkap";
}
echo json_encode($response);
?>
