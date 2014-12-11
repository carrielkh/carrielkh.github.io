var geocoder;
var map;
function initialize() {
      signed_in=true
      geocoder = new google.maps.Geocoder();
      var myLatLng = new google.maps.LatLng(-33.890542, 151.274856);
      var styles = [
       {
         stylers: [
         { visibility: 'simplified' },
         { gamma: 2 },
         { weight: 2 }
         ]
       },
        {
       featureType: "water",
       stylers: [
        { color: "#69C3CC" },
       ]
        },
        {
       featureType: "road",
       stylers: [
        { visibility: "off" }
       ]
        },
        {
         featureType: "landscape",
         stylers: [
          { color:"#AEBC6A"}
         ]
        }
      ];
      var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
      var mapOptions = {
         zoom: 2,
         center: new google.maps.LatLng(40.711877, -73.992423),
         mapTypeControl: false,
         streetViewControl:false,
         zoomControl: true,
        };
      map = new google.maps.Map(document.getElementById('googleMap1'),mapOptions);
      map.mapTypes.set('map_style', styledMap);
      map.setMapTypeId('map_style');
    }
google.maps.event.addDomListener(window, 'load', initialize);
