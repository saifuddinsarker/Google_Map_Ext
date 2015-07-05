<?php
$db=new Database($db_host,$db_username,$db_password,$db_name);
$db->connect();
$err="";
if(isset($_POST['submit']) && $_POST['submit']!=""){
	$error=0;
	if($_POST['address']==""){
		$error++;
	}
	if($_POST['lat']==""){
		$error++;
	}
	if($_POST['lng']==""){
		$error++;
	}
	if($error==0){
		$insert_array['eyo_admin_id']=$_SESSION['user_id'];
		$insert_array['full_address']=$_POST['address'];
		$insert_array['lat']=$_POST['lat'];
		$insert_array['lng']=$_POST['lng'];
		if($db->query_insert($TABLE_EYO_MAP,$insert_array)){
			$err="Map saved succesfully";
		}
	}else{
		$err="Please select valid position from the map";
	}
	
	
}
$sql="SELECT * from ".$TABLE_EYO_MAP . " order by id desc";
$map_result=$db->fetch_all_array($sql);
?>