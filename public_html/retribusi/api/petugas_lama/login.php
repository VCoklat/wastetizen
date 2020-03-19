<?php

$response = array();
$user_exist = 0;
$telp_exist = 0;
$response_pasar= array();
require_once("db_connect.php"); //Establishing connection with our
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = verify($_POST['username']);
	
	if ($username=="petugas"){
	    $response['pasar'] = array();
	    $response['list_menu'] = array();
	    $response["username_exist"] = 1;
		$response["user_id"] = "151ACP001";
		$response["username"] = $username;
		$response["photo"] = "";
		$response["saldo"] = 50000;	
            
		$response["pasar"][]=array(
            	'id' => "PS001",
            	'name' => "Pasar Tradisional",
            	'address' => "Jalan Malabar Raya",
            );

		//$response["list_menu"][]="SLU";
		$response["list_menu"][]="Merchant";
		//$response["list_menu"][]="point";
		//$response["list_menu"][]="retribusi";
		//$response["list_menu"][]="pinjaman";
	}
	else if ($username=="pedagang"){
	    $response['pasar'] = array();
	    $response['list_menu'] = array();
	    $response["username_exist"] = 1;
		$response["user_id"] = "Pasar001";
		$response["username"] = $username;
		$response["photo"] = "";
		$response["saldo"] = 50000;	

		$response["pasar"][]=array(
            	'id' => "PS001",
            	'name' => "Pasar Tradisional",
            	'address' => "Jalan Malabar Raya",
            );

		//$response["list_menu"][]="SLU";
		//$response["list_menu"][]="bayar";
		//$response["list_menu"][]="point";
		$response["list_menu"][]="Merchant";
		//$response["list_menu"][]="pinjaman";
	}
// 	else if ($username=="david"){
// 	    $response['pasar'] = array();
// 	    $response['list_menu'] = array();
// 	    $response["username_exist"] = 1;
// 		$response["user_id"] = "Pasar002";
// 		$response["username"] = $username;
// 		$response["photo"] = "";
// 		$response["saldo"] = 50000;	
		
// 		$row_array['data']['bles'][]=array(
//             	'id' => $row['ble_id'],
//             	'uuid' => $uuid,
//             	'major' => $major,
//             	'minor' => $minor,
//             	'name' =>$name,
//             	'mac_address' => $mac,
//             	'error' => "BLE is already registered",
//             );
            
// // 		$response_pasar["id"]="PS001";
// // 		$response_pasar["name"]="Malabar Cibodas";
// // 		$response_pasar["address"]="Jalan Malabar Raya";
// 		$response["pasar"][]=array(
//             	'id' => "PS001",
//             	'name' => "Pasar Tradisional",
//             	'address' => "Jalan Malabar Raya",
//             );
// // 		$response["pasar"][]=array(
// //             	'id' => "PS002",
// //             	'name' => "Malabar Senen",
// //             	'address' => "Jalan Senen Raya",
// //             );
// //         $response["pasar"][]=array(
// //             	'id' => "PS003",
// //             	'name' => "Jombang",
// //             	'address' => "Jalan Raya",
// //             );    
// // 		$response_pasar["id"]="PS002";
// // 		$response_pasar["name"]="Malabar Senen";
// // 		$response_pasar["address"]="Jalan Senen Raya";
// // 		$response["pasar"][]=json_encode($response_pasar);
		
// // 		$response_pasar["id"]="PS003";
// // 		$response_pasar["name"]="Jombang";
// // 		$response_pasar["address"]="Jalan Raya";
// // 		$response["pasar"][]=json_encode($response_pasar);
// 		$response["list_menu"][]="SLU";
// 		$response["list_menu"][]="tambahpasar";
// 		$response["list_menu"][]="bayar";
// 		$response["list_menu"][]="point";
// 		$response["list_menu"][]="Merchant";
// 		$response["list_menu"][]="pinjaman";
// 	}
	else{
	$password = $_POST['password'];
	$query = "SELECT petugas.userid,petugas.users_id,petugas.profile_pic, petugas.password from petugas where petugas.name ='$username'";
	if ($result = mysqli_query($con, $query)) {
		    $response['pasar'] = array();
	        $response['list_menu'] = array();
		if (mysqli_num_rows($result) > 0) {
		    $data=mysqli_fetch_array($result);
	        if (password_verify( $password,$data['password'])) {
	            $response["username_exist"] = 1;
    		    $response["user_id"] = $data['userid'];
    		    $response["username"] = $username;
    		    $response["photo"] = $data['profile_pic'];
    		    $id=$data['users_id'];
    		    $query_pasar = "SELECT pasar.name, pasar.users_id,pasar.alamat AS id_pasar from pasar_relation JOIN pasar where pasar_relation.petugas_id ='$id' and pasar_relation.pasar_id = pasar.users_id";
            	if ($result_pasar = mysqli_query($con, $query_pasar)) {
            	    
    		        if (mysqli_num_rows($result_pasar) > 0) {
    		            while($data_pasar = mysqli_fetch_assoc($result_pasar))
                        {
        		           // $data_pasar=mysqli_fetch_array($result_pasar);
                		    $response["pasar"][]=array(
                            	'id' => $data_pasar['users_id'],
                            	'name' => $data_pasar['name'],
                            	'address' => $data_pasar['id_pasar'],
                            );
                        }
    		        }
            	}  
                
        		$response["list_menu"][]="Merchant";
        		$response["saldo"]=0;
        		if ($username=="david"){
            		$response["list_menu"][]="SLU";
            		$response["list_menu"][]="tambahpasar";
            		$response["list_menu"][]="bayar";
            		$response["list_menu"][]="point";
            		$response["list_menu"][]="pinjaman";
            		$response["list_menu"][]="qrcode_merchant";	
        		}
	        }
	        else {
    			$response["username_exist"] = 0;
    	        $response["user_id"] = "";
    	        $response["username"] = "";
    		    $response["photo"] =  null;
    		    $response["pasar"]=array();
    		    $response["list_menu"]=array();
    		    $response["saldo"]=0;
	        }
		}else {
	    // required post params is missing
    	    $response["username_exist"] = 0;
    	    $response["user_id"] = "";
    	        $response["username"] = "";
    		    $response["photo"] =  null;
    		    $response["pasar"]=array();
    		    $response["list_menu"]=array();
    		    $response["saldo"]=0;
        }
    } else echo "Failed to connect to MySQL: " . mysqli_connect_error($con);
}
}
$size = mb_strlen(json_encode($response, JSON_NUMERIC_CHECK), '8bit')+5;
header('Content-length: '.$size);
echo json_encode($response);
?>
