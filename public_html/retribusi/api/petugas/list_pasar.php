<?php

$response = array();
$user_exist = 0;
$telp_exist = 0;
$response_pasar= array();
require_once("db_connect.php"); //Establishing connection with our
if (isset($_POST['user_id']) &&isset($_POST['foto_ktp']) ) {
	$user_id = $_POST['user_id'];
	$foto_ktp = $_POST['foto_ktp'];
	$query = "SELECT users_id from petugas where userid ='$user_id'";
	if ($result = mysqli_query($con, $query)) {
		if (mysqli_num_rows($result) > 0) {
		    $data=mysqli_fetch_array($result);
		    $id=$data['users_id'];
		    $query_pasar = "SELECT pasar.name, pasar.users_id,pasar.alamat AS id_pasar from pasar_relation JOIN pasar where pasar_relation.petugas_id ='$id' and pasar_relation.pasar_id = pasar.users_id";
        	if ($result_pasar = mysqli_query($con, $query_pasar)) {
        	    http_response_code(200);
		        if (mysqli_num_rows($result_pasar) > 0) {
		            while($data_pasar = mysqli_fetch_assoc($result_pasar))
                    {
            		  //  $response[]=array(
                //         	'id' => $data_pasar['users_id'],
                //         	'name' => $data_pasar['name'],
                //         	'address' => $data_pasar['id_pasar'],
                //         );
                        $query = "UPDATE `pedagang` SET `foto_ktp`= '$foto_ktp',`SLU`= '4' WHERE userid='$user_id'";
                	    if ($result1 =mysqli_query($con, $query) ){
                		    $response["status"] = 1;
                		    $response["description"] = "Profile Berhasil Berubah"; // ini berubah
                	    } echo mysqli_error($con);
                    }
		        }
        	}  
    } else echo "Failed to connect to MySQL: " . mysqli_connect_error($con);
}
} else{
     $response["status"] = 0;
	 $response["description"] = "Data belum lengkap";
}
echo json_encode($response);
?>
