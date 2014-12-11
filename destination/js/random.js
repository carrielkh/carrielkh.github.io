var infowindow = new google.maps.InfoWindow();
var marker;
var latitude = [48.85661,51.50735,41.38506,20.80221,40.72118,
37.77493,18.22083,-33.86749,-22.91163,-16.50041,
18.33576,49.28273,55.95325,47.36865,45.50169,
1.97725,-33.92487,50.07554,35.24012,38.90719,
47.49791,25.03428,44.42796,31.76832,22.39643];
var longitude = [2.35222,-0.12776,2.17340,-156.34840,-74.00371,
-122.41942,-66.59015,151.20699,-43.18829,-151.74149,
-64.89634,-123.12074,-3.18827,8.53918,-73.56726,
73.53610,18.42406,14.43780,24.80927,-77.03687,
19.04023,-77.39628,-110.58846,35.21371,22.39643];
var place = ["Paris","London","Barcelona","Maui","New York City",
"San"+"Francisco","Puerto"+"Rico","Sydney","Rio"+"de"+"Janeiro","Bora"+"Bora",
"U.S.VirginIslands","Vancouver","Edinburgh","Zurich","Montreal",
"Maldives","CapeTown","Prague","Crete","WashingtonD.C.",
"Budapest","Bahamas","Yellowstone","Jerusalem","HongKong"];
function randomplace() {
  if (marker != null) {marker.setMap(null); }
  var n = Math.floor((Math.random() * 25) );
  x = latitude[n];
  y = longitude[n];
  var lat = parseFloat(x);
  var lng = parseFloat(y);
  var latlng = new google.maps.LatLng(lat, lng);
  var iconi = "src/a.png"
  geocoder.geocode({'latLng': latlng}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[1]) {
        map.setCenter(latlng);
        marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon:iconi
        });
       infowindow.setContent( place[n] );
       infowindow.open(map, marker);
      } 
      function deletemarker(){
        marker.setMap(null);
      }
      google.maps.event.addListener(marker, 'click', deletemarker);
      marker.setMap(map);
    } else {
      alert('Try again!!');
    }
  });
}

