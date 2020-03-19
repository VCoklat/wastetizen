<?php
$response = array();
$user_exist = 0;
$telp_exist = 0;
require_once("db_connect.php"); //Establishing connection with our
if (isset($_POST['user_id']) ) {
	$no_kios = verify($_POST['no_kios']);
	$user_id = verify($_POST['user_id']);
	$query = "SELECT user_id from petugas where userid ='$user_id'";
    if ($result = mysqli_query($con, $query)) {
		if (mysqli_num_rows($result) > 0) {
		    $data=mysqli_fetch_array($result);
		    $usersr=$data['user_id'];
		} 
    }
    $id_pasar=$_POST['id_pasar'];
	$nama_pedagang = verify($_POST['nama_pedagang']);
	$nama_pedagang = verify(str_replace("Ibu ","",$nama_pedagang));
    $nama_pedagang = verify(str_replace("Pak ","",$nama_pedagang));
    $nama_pedagang = verify(str_replace("pak ","",$nama_pedagang));
    $nama_pedagang = verify(str_replace("ibu ","",$nama_pedagang));
    $nama_pedagang = strtoupper($nama_pedagang);        
	$email = $_POST['email_pedagang'];
	$telp = $_POST['hp_pedagang'];
	$alamat = $_POST['alamat'];
	$dagangan =verify($_POST['tipe_dagangan']);
	$photo = $_POST['foto_pedagang'];
	$foto_npwp = $_POST['foto_npwp'];
	$foto_kios = $_POST['foto_kios'];
	$foto_ktp = $_POST['foto_identitas'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
//     $query1 = "SELECT * from pedagang where no_kios ='$no_kios' OR telp='$telp' LIMIT 1";
// 	if ($result = mysqli_query($con, $query1)) {
// 		if (mysqli_num_rows($result) > 0) {
// 		    $query = "UPDATE `pedagang` SET `name`= '$nama_pedagang', `profile_pic`='$photo', `telp`= '$telp',`dagangan`= '$dagangan',foto_kios='$foto_kios',foto_ktp='$foto_ktp',foto_npwp='$foto_npwp',no_kios='$no_kios',email='$email',latitude='$latitude',longitude='$longitude',keterangan='Sudah Terverifikasi' WHERE no_kios='$no_kios' OR telp='$telp'";
//     	    if ($result1 =mysqli_query($con, $query) ){
//     		    $response["status"] = 1;
//     		    $response["description"] = "Profile Berhasil Berubah"; // ini berubah
//     	    } echo mysqli_error($con);
//         }else {
            $tanggal=date("Y-m-d");
            $id_rand= generateRandomString();
	    // required post params is missing
	        $query ="INSERT INTO `pedagang`(`user_id`, `status`, `name`,  `email`, `profile_pic`, `user_type`, `alamat`, `keterangan`, `telp`, `latitude`, `longitude`, `no_kios`, `foto_kios`, `dagangan`, `foto_npwp`, `foto_ktp`, `create_date`, `id_pedagang`, `id_pasar`) VALUES ('$usersr','active','$nama_pedagang','$email','$photo','admin pasar','$alamat','Sudah Terverifikasi','$telp','$latitude','$longitude','$no_kios','$foto_kios','$dagangan','$foto_npwp','$foto_ktp','$tanggal','$id_rand','$id_pasar')";
	        if ($result2 =mysqli_query($con, $query) ){
	            $query ="INSERT INTO `log_pedagang`(`user_id`, `status`, `name`,  `email`, `profile_pic`, `user_type`, `alamat`, `keterangan`, `telp`, `latitude`, `longitude`, `no_kios`, `foto_kios`, `dagangan`, `foto_npwp`, `foto_ktp`, `id_pedagang`, `id_pasar`) VALUES ('$user_id','insert','$nama_pedagang','$email','$photo','admin pasar','$alamat','Sudah Terverifikasi','$telp','$latitude','$longitude','$no_kios','$foto_kios','$dagangan','$foto_npwp','$foto_ktp','$id_rand','$id_pasar')";
	            $result2 =mysqli_query($con, $query);
	        
    		    $response["status"] = 1;
    		    $response["description"] = "Pedagang Baru Berhasil Ditambahkan"; // ini berubah
	        }else echo mysqli_error($con);
    // 	    } else echo mysqli_error($con);
    //     } 
    // }else echo mysqli_error($con);
}
echo json_encode($response);
?>
