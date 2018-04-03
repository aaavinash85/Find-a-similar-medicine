<!DOCTYPE html>
<html>
<head>
	<title>Location</title>
	<style>
       #map {
        height: 300px;
        width: 100%;
       }
    </style>
	 <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function showPosition(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showMap, showError);
    } else{
        alert("Sorry, your browser does not support HTML5 geolocation.");
    }
}

// Define callback function for successful attempt
function showMap(position){
    // Get location data
    lat = position.coords.latitude;
    long = position.coords.longitude;
    var latlong = new google.maps.LatLng(lat, long);

    var myOptions = {
        center: latlong,
        zoom: 16,
        mapTypeControl: true,
        navigationControlOptions: {style:google.maps.NavigationControlStyle.SMALL}
    }

    var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
    var marker = new google.maps.Marker({position:latlong, map:map, title:"You are here!"});
}

// Define callback function for failed attempt
function showError(error){
    if(error.code == 1){
        result.innerHTML = "You've decided not to share your position, but it's OK. We won't ask you again.";
    } else if(error.code == 2){
        result.innerHTML = "The network is down or the positioning service can't be reached.";
    } else if(error.code == 3){
        result.innerHTML = "The attempt timed out before it could get the location data.";
    } else{
        result.innerHTML = "Geolocation failed due to unknown error.";
    }
}
</script>
</head>
<body background="z.jpg">
<?php

$lat=$_GET['lat'];
$longt=$_GET['long'];


?>
    <div id="map"></div>
		<script>
      function initMap() {
        var latt=<?php echo $lat ?>;
        var longt=<?php echo $longt ?>;
        var uluru = {lat: latt, lng: longt};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

		<button type="button" onclick="showPosition();">Show My Position on Google Map</button>
    <div id="embedMap" style="width: 1350px; height:400px;">
        <!--Google map will be embedded here-->
				<script async defer
		    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOCqRQwLsuhpW5qqYo6ChK3mlNaafs2iA&callback=initMap">
		    </script>
    </div>
</body>
</html>
