<html>
<head>
  <meta charset="UTF-8" />
  <meta name="Destination" content="travel experiences">
  <meta name="Destination" content="footprints">
  <meta name="Destination" content="destination">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="i.png">
  <title>Destination.Welcome</title>
  <link href="style/styles.css" rel="stylesheet" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Short+Stack' rel='stylesheet' type='text/css'>
  <script src="http://code.jquery.com/jquery-1.11.1.js"></script>

  <script
    src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
  </script>
  <script src="js/map.js"></script>

</head>
<body>

	  <img src="bc.jpg" class="background"></img>

    <div class="top">
      <div class="op op1"></div>

      

      <div class="up">
        <img src="logo.png" class="logo2"></img>
        <form id="uploadForm" action="upload1.php" method="POST">
        <div id="targetLayer" class="noimage"><br><br><br>No Image</div>
  
        <input name="userImage" type="file" class="file" value="choose">
<!--         <input type="submit" value="Upload" class="button b2" /> -->
        <input name="email" class="button b2 sup" id="text" type="textbox" value="Email" onClick="select()">
        <input name="password"class="button b2 sup" id="text" type="password" value="Password" onClick="select()">
        <input name="passwordagain"class="button b2 sup" id="text" type="password" value="Confirm Password" onClick="select()">
        <input name="submit"class="button b1 " type="submit" value="Submit" >
      </form>
      </div>
    </div>

    <div class="map" id="googleMap" ></div>
    <script>

     function signup() {
   window.open("map.html", "_self");

    
     }
    function select() {
      document.getElementById("text").select();
     }
    </script>
</body>
</html>