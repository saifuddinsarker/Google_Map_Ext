<?php
session_start();
require('../common/database.php');
require('../config/config.php');
$db=new Database($db_host,$db_username,$db_password,$db_name);
$db->connect();
if(isset($_POST)){
	if($_POST['username']!="" && $_POST['password'] !==""){
		$sql="SELECT * from ".$TABLE_EYO_ADMIN." where username='".$_POST['username']."' AND password='".md5($_POST['password'])."'";
		$result=$db->fetch_all_array($sql);
		if(count($result) > 0){
			// set session for admin
			$_SESSION['type']="admin";
			$_SESSION['name']=$result[0]['username'];
			$_SESSION['user_id']=$result[0]['id'];
			header("Location: index.php");
			die();
		}else{
			header("Location: admin_login.php?msg=Wrong username or password");
			die();
		}
	}else{
		header("Location: admin_login.php?msg=Wrong username or password");
		die();
	}
}else{
	
}
?>