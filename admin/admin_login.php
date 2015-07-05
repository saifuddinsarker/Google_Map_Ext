<?php 
session_start();
if(isset($_SESSION['type']) && isset($_SESSION['name']) && $_SESSION['type']!="" && $_SESSION['name']!=""){	
		header("Location: index.php");
		die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<title>Admin Login Page</title>
<link rel="stylesheet" type="text/css" href="../css/admin_style.css"/>
</head>
<body>
<!-- Begin Page Content -->
<div id="container">
  <form action="login_process.php" method="post" accept-charset="UTF-8">
    <label for="loginmsg" style="color:hsla(0,100%,50%,0.5); font-family:"Helvetica Neue",Helvetica,sans-serif;">
      <?php  echo @$_GET['msg'];?>
    </label>
    <br />
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <div id="lower">
      <input type="submit" value="Login">
    </div>
    <!--/ lower-->
  </form>
</div>
<!--/ container--> 
<!-- End Page Content -->
</body>
</html>