var iconimage= "src/1.png";
  var appear1 = document.getElementById("popbc");
  var appear2 = document.getElementById("pop1");
  var appear3 = document.getElementById("pop2");
  var appear4 = document.getElementById("pop3");

   function icon1(){
   iconimage = "src/1.png";
   appear1.style.display = "none";  
   appear2.style.display = "none";
   appear3.style.display = "none";   
   appear4.style.display = "none";

   }
      function icon2(){
   iconimage = "src/2.png";
  appear1.style.display = "none";  
   appear2.style.display = "none";
   appear3.style.display = "none";   
   appear4.style.display = "none";
   }
      function icon3(){
   iconimage = "src/3.png";
  appear1.style.display = "none";  
   appear2.style.display = "none";
   appear3.style.display = "none";   
   appear4.style.display = "none";
   }
      function icon4(){
   iconimage = "src/4.png";
  appear1.style.display = "none";  
   appear2.style.display = "none";
   appear3.style.display = "none";   
   appear4.style.display = "none";
   }

  
   function codeAddress() {
   var address = document.getElementById('address').value;
       geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,icon:iconimage,draggable:true,
          position: results[0].geometry.location,
          attribution: {
    source: 'Destination',
    webUrl: 'http://yourdestination.co/test1/map.html'
  }
      });
      function deletemarker(){
        marker.setMap(null);
      }
      google.maps.event.addListener(marker, 'click', deletemarker);
      marker.setMap(map);} else {
      alert('No Place Found');
    }});}
    function select() {
    document.getElementById("address").select();
    }





