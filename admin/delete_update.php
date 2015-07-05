<?php require('../common/admin_session.php');
require('../common/database.php');
require('../config/config.php'); 
$db=new Database($db_host,$db_username,$db_password,$db_name);
$db->connect();
// For delete action
if($_GET['action']=="delete"){
	if($_GET['id']>0){
		$sql="DELETE FROM ".$TABLE_EYO_MAP . " where id=".$_GET['id'];
		$db->query($sql);
		header("Location: index.php");
		die();
	}
}
// For update action
else if($_GET['action']=="update"){
		$update_array['status']=$_GET['status'] ? 0 : 1 ;
		$db->query_update($TABLE_EYO_MAP,$update_array, " id=".$_GET['id']);
	    header("Location: index.php");
		die();
}

header("Location: index.php");
die();
?>