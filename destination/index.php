<!DOCTYPE>
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
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
  <script src="js/map.js"></script>
</head>
<body>
  <?php
    $Err="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $db = 'userscarrielkh';
      $link = mysql_connect("mysqlv113", "carrielkh", "Yl5211314");
      $db_selected = mysql_select_db($db, $link);
      if(!$link){die('Error connecting to server :'.mysql_error());}
      $result=mysql_query("SELECT email,password FROM upload1 WHERE email='$_POST[email]' && password='$_POST[password]'");
      if(mysql_fetch_array($result,MYSQL_ASSOC)){header('Location: map.html');
      }else{$Err = "Invalid Email or password! <br />";}
      mysql_close($link);}
      function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;}
  ?>
  <img src="src/bc.jpg" alt="background" class="background"></img>
  <div class="top">
    <div class="op op1"></div>
    <img src="src/logo.jpg" alt="logo" class="logo"></img>
    <p class="desc">Visualize Your Travel Experiences</p>
    <div class="buttons">
      <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <input name="email"class="button b2 lin" id="text" type="textbox" value="Email" onClick="select()">
        <input name="password"class="button b2 lin" id="text" type="password" value="Passward" onClick="select()">
        <input name="submit"class="button b1 lin" id="login" type="submit" value="Log In" >
        <input class="button b1 lin" type="button" value="Sign Up" onClick="signup()">
        <input class="button b1 lin" type="button" value="Explore" onClick="explore()">
        <div>
          <span class="error"><?php echo $Err;?></span>
        </div>
      </form>
    </div>
  </div>
  <div class="map" id="googleMap" ></div>
  <script src="js/ls.js" > </script>
</body>
</html>