<?php 
require('common/database.php');
require('config/config.php'); 
$db=new Database($db_host,$db_username,$db_password,$db_name);
$db->connect();
$sql="SELECT * from ".$TABLE_EYO_MAP . " where status=1";
$map_result=$db->fetch_all_array($sql);
?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
	<title>Eyo Map Plugin</title>
	<meta name="description" content="A demo of maps with multiple markers and infowindow" />
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<style>
html, body, #map-canvas {
	height: 100%;
	margin: 0px;
	padding: 0px
}
</style>
	<script type="text/javascript">

var LocationData = [
	<?php foreach($map_result as $map){ ?>
	[<?php echo $map['lat']; ?>, <?php echo $map['lng']; ?>, "<?php echo $map['full_address']; ?>" ], 
	<?php } ?>
];

function initialize()
{
	var map = new google.maps.Map(document.getElementById('map-canvas'));
	var bounds = new google.maps.LatLngBounds();
	var infowindow = new google.maps.InfoWindow();
	
	for (var i in LocationData)
	{
		var p = LocationData[i];
		var latlng = new google.maps.LatLng(p[0], p[1]);
		bounds.extend(latlng);
		
		var marker = new google.maps.Marker({
			position: latlng,
			map: map,
			title: p[2]
		});
	
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.setContent(this.title);
			infowindow.open(map, this);
		});
	}
	
	map.fitBounds(bounds);
}

google.maps.event.addDomListener(window, 'load', initialize);

	</script>
	</head>
	<body>
    <div id="map-canvas"></div>
</body>
</html>