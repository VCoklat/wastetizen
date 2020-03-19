<?php
require_once ('../function/db_connect.php');
require_once ('../function/secure.php');

if(isset($_POST['email'])&&isset($_POST['password'])) {
  $email=clean_email($_POST['email']);
  $password=clean($_POST['password']); 	
  $params = Array($email, md5($password));
  $results = $db->rawQuery("SELECT * FROM user WHERE email = ? AND password = ? LIMIT 1", $params);
 // $results = $db->get ('user');
      session_start();
      foreach ($results as $result){
      $_SESSION["name"] = $result['name'];
      $_SESSION["picture"] = $result['picture'];
      $_SESSION["email"] = $email;	
	 header("Location: menu.php?menu=dashboard");	
	 die(); 	  
      }
}
header("Location: index.php?status=1");
die();
?>