<?php
require('../common/admin_session.php');
require('../common/database.php');
require('../config/config.php');
require('save_map.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin - Eyo Google Map Plugin</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/admin_style.css"/>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
<script src="../script/admin_js.js"></script>
</head>
<body>
<p><?php echo $err; ?></p>
<input id="pac-input" class="controls" type="text"
        placeholder="Enter a location">
<div id="map-canvas"></div>
<div id="right-canvas"><a href="log_out.php" class="log-out">Log Out</a>
<h3>Saved map list</h3>
<ul>
    <?php $i=1; foreach($map_result as $map){ ?>
    <li>
      <p><?php echo $i.". ".$map['full_address']; $i++;?></p>
      <a href="delete_update.php?action=update&id=<?php echo $map['id'];?>&status=<?php echo $map['status']; ?>"><?php echo $map['status']==0 ? "Set Active":" Set Inactive";  ?></a> | <a href="delete_update.php?action=delete&id=<?php echo $map['id'];?>" onClick="return confirm('Are you sure want to delete!');">Delete</a>
    </li>  
    <?php } ?> 
  </ul>
</div>
<form action="" method="post" accept-charset="UTF-8">
  <input type="hidden" name="address" id="address">
  <input type="hidden" name="lat" id="lat">
  <input type="hidden" name="lng" id="lng">
  <div id="type-selector" class="controls">
    <input type="submit" name="submit" id="submit" value="Save Map" style="float:left">
  </div>
</form>
</body>
</html>