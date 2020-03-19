<?php
require_once ('../function/db_connect.php');
session_start();
if(!isset($_SESSION['email'])){ //if login in session is not set
    header("Location: index.php");
	die(); 
}

?>