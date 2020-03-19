<?php
 require_once('../function/db_connect.php');
 if(!empty($_POST['register'])){
		if(!empty($_POST['email'])) {
			$email=$_POST['email'];
			echo $email;
		}
		if(!empty($_POST['password'])) {
			$password=$_POST['password'];
			echo $password;
		}
	
		if(!empty($_POST['fullname'])) {
			$fullname=$_POST['fullname'];
		}
		
		$data = Array ("name" => $fullname,
				   "email" =>$email,
				   "password" => md5($password),
		);
		$id = $db->insert ('user', $data);
		if($id) {
            $from="noreply@wastetizen.com";// this is the sender's Email address
            
            $subject="Pendaftaran Berhasil";
            $ph_number="Terimakasih telah Mendaftar di Wastetizen, Bersama Kita Bisa";
            $headers="From:".$from;
            mail($email,$subject,$ph_number,$headers);
			header("Location: index.php");
			die(); 
		}else echo 'insert failed: ' . $db->getLastError();
	}
?>