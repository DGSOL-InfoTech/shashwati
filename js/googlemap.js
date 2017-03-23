/* JavaScript for Google Map Initilisation */

/* Function for Google Map Initialization */
function initMap() {
	var uluru = {lat: 19.258691, lng: 73.135514};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 14,
		center: uluru
	});
	var marker = new google.maps.Marker({
		position: uluru,
		map: map,
	});
	var infowindow = new google.maps.InfoWindow({
			content:"<span style='color:black'><b>Shashwati - Ano Rectal Hospital</b><br/>201 Varna Building<br/>Gandhari, Kalyan West</span>"
	});
	google.maps.event.addListener(marker, "click", function(){
		infowindow.open(map,marker);
	});
	infowindow.open(map,marker);
}

/*
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div style="overflow:hidden;height:500px;width:600px;">
    <div id="gmap_canvas" style="height:500px;width:600px;"></div>
    <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
    <a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a>
</div>
<script type="text/javascript">
	function init_map(){
		var myOptions = {
			zoom:14,
			center:new google.maps.LatLng(40.805478,-73.96522499999998),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
		marker = new google.maps.Marker({
			map: map,
			position: new google.maps.LatLng(40.805478, -73.96522499999998)
		});
		infowindow = new google.maps.InfoWindow({
			content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" 
		});
		google.maps.event.addListener(marker, "click", function(){
			infowindow.open(map,marker);
		});
		infowindow.open(map,marker);
	}
	google.maps.event.addDomListener(window, 'load', init_map);
</script>
		<iframe src="https://www.google.com/maps/d/embed?mid=zoeRlFyCF6JA.k34PVeEq6lKg" width="640" height="480"></iframe>
*/