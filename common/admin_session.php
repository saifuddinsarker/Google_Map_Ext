<?php 
session_start();
// Check Session for unauthorise access
if(!isset($_SESSION['type']) || !isset($_SESSION['name']) || $_SESSION['type']=="" || $_SESSION['name']==""){
	if(preg_replace('/\.php$/', '', __FILE__)!="admin_login"){
		//echo preg_replace('/\.php$/', '', __FILE__);
		header("Location: admin_login.php");
		die();
	}
}


?>