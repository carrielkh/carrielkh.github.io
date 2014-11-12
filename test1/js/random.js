var infowindow = new google.maps.InfoWindow();
var marker;


function randomplace() {
	var x = Math.random()*90;
    var y = Math.random()*180;
	var lat = parseFloat(x);
    var lng = parseFloat(y);
    var latlng = new google.maps.LatLng(lat, lng);

  
  geocoder.geocode({'latLng': latlng}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[1]) {

        marker = new google.maps.Marker({
            position: latlng,
            map: map
        });
        infowindow.setContent("You can go to:"+results[1].formatted_address);
        infowindow.open(map, marker);
      } else {
        alert('Try again!');
      }
    } else {
      alert('Try again!!');
    }
  });
}