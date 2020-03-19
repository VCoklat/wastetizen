<?php
require_once('../../../function/db_connect.php');
require_once('../../../function/secure.php');
require_once('../../class/image/bulletproof.php');
session_start();
if(!isset($_SESSION['email'])){ //if login in session is not set
    header("Location: http://www.nustar.id/index.php");
}
?>