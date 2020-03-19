<?php
$response = array();
$user_exist = 0;
$telp_exist = 0;
require_once("db_connect.php"); //Establishing connection with our
if (isset($_POST['user_id'])&& isset($_POST['id_pedagang']) ) {
	$no_kios = $_POST['no_kios'];
	$user_id = $_POST['user_id'];
	$query = "SELECT user_id from petugas where userid ='$user_id'";
    if ($result = mysqli_query($con, $query)) {
		if (mysqli_num_rows($result) > 0) {
		    $data=mysqli_fetch_array($result);
		    $id_pasar=$data['user_id'];
		} 
    }
    
	$nama_pedagang = $_POST['nama_pedagang'];
	$email = $_POST['email_pedagang'];
	$telp = $_POST['hp_pedagang'];
	$alamat = $_POST['alamat'];
	$dagangan =$_POST['tipe_dagangan'];
	$photo = $_POST['foto_pedagang'];
	$foto_npwp = $_POST['foto_npwp'];
	$foto_kios = $_POST['foto_kios'];
	$foto_ktp = $_POST['foto_identitas'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	$id_pedagang = $_POST['id_pedagang'];
	$mulai_jualan = $_POST['mulai_jualan'];
//     $query1 = "SELECT * from pedagang where no_kios ='$no_kios' OR telp='$telp' LIMIT 1";
// 	if ($result = mysqli_query($con, $query1)) {
// 		if (mysqli_num_rows($result) > 0) {
		    $query = "UPDATE `pedagang` SET `name`= '$nama_pedagang', `profile_pic`='$photo', `telp`= '$telp',`dagangan`= '$dagangan',foto_kios='$foto_kios',foto_ktp='$foto_ktp',foto_npwp='$foto_npwp',no_kios='$no_kios',email='$email',alamat='$alamat',latitude='$latitude',longitude='$longitude',mulai_jualan='$mulai_jualan', keterangan='Sudah Terverifikasi' WHERE id_pedagang='$id_pedagang'";
    	    if ($result1 =mysqli_query($con, $query) ){
    	        $query ="INSERT INTO `log_pedagang`(`user_id`, `status`, `name`,  `email`, `profile_pic`, `user_type`, `alamat`, `keterangan`, `telp`, `latitude`, `longitude`, `no_kios`, `foto_kios`, `dagangan`, `foto_npwp`, `foto_ktp`,  `id_pedagang`,  `mulai_jualan`) VALUES ('$user_id','update','$nama_pedagang','$email','$photo','admin pasar','$alamat','Sudah Terverifikasi','$telp','$latitude','$longitude','$no_kios','$foto_kios','$dagangan','$foto_npwp','$foto_ktp','$id_rand','$mulai_jualan')";
	            $result2 =mysqli_query($con, $query);
    		    $response["status"] = 1;
    		    $response["description"] = "Profile Berhasil Berubah"; // ini berubah
    	    } echo mysqli_error($con);
    //     }else {
    //         $tanggal=date("Y-m-d");
	   // // required post params is missing
	   //     $query ="INSERT INTO `pedagang`(`user_id`, `status`, `name`,  `email`, `profile_pic`, `user_type`, `alamat`, `keterangan`, `telp`, `latitude`, `longitude`, `no_kios`, `foto_kios`, `dagangan`, `foto_npwp`, `foto_ktp`, `create_date`) VALUES ('1','active','$nama_pedagang','$email','$photo','admin pasar','$alamat','Sudah Terverifikasi','$telp','$latitude','$longitude','$no_kios','$foto_kios','$dagangan','$foto_npwp','$foto_ktp','$tanggal')";
	   //     if ($result2 =mysqli_query($con, $query) ){
    // 		    $response["status"] = 1;
    // 		    $response["description"] = "Pedagang Baru Berhasil Ditambahkan"; // ini berubah
    // 	    } else echo mysqli_error($con);
    //     } 
    // }else echo mysqli_error($con);
} else{
    $response["status"] = 0;
    $response["description"] = "Parameter Kurang"; // ini berubah
}
echo json_encode($response);
?>
