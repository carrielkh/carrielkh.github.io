<!DOCTYPE>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="Destination" content="travel experiences">
  <meta name="Destination" content="footprints">
  <meta name="Destination" content="destination">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="i.png">
  <title>Destination.Signup</title>
  <link href="style/styles.css" rel="stylesheet" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Short+Stack' rel='stylesheet' type='text/css'>
  <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
  <script src="js/map.js"></script>
</head>
<body>
  <?php
    $nameErr = $emailErr = $passwordErr = $paaErr="";
    $uname=$_POST["uname"];
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["uname"])) {
        $nameErr = "Name is required<br>";
        } else {
        $name = test_input($_POST["uname"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed<br>"; 
        }
        }
     if (empty($_POST["email"])) {
        $emailErr = "Email is required<br>";
        } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format<br>"; 
        }
        }
     if (empty($_POST["password"])) {
        $passwordErr = "Password is required<br>";
        } else {
        $password = test_input($_POST["password"]);
     if (!preg_match("/^(?=.*\d.*\d)[0-9A-Za-z]{6,}$/",$password)) {
        $nameErr = "Must have a minimum of 6 characters, 2 numbers<br>"; 
        }
        }
     if($_POST["password"]!=$_POST["passwordagain"]){
        $paaErr = "Password mismatch <br />";
        }else{
        $_SERVER['mysqlv113'];
        $con=mysql_connect("mysqlv113","carrielkh","Yl5211314");
     if(!$con){
        die('Error connecting to server :'.mysql_error());}
     mysql_select_db("userscarrielkh",$con);
     $value1 = $_POST['email'];
     $value2 = $_POST['password'];
     $value3 = $_POST['passwordagain'];
     $value4 = $_POST['uname'];
     $result=mysql_query("SELECT email FROM upload1 WHERE email='$value1'");
     if(!mysql_fetch_array($result,MYSQL_ASSOC)){
     $sql="INSERT INTO upload1(email, password,passwordagain,uname) VALUES('$value1','$value2','$value3','$value4')";
     if(!mysql_query($sql,$con)){
    die('Error :'.mysql_error());}
    header('Location: login.php');
    echo "You are registered. Congrats !!!";
    }else{
    $nameErr="Username Already exists ! <br>";}
    mysql_close($con);
    }
    }
   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   }
  ?>

<img src="src/bc.jpg" alt="background" class="background"></img>
<div class="top">
   <div class="op op1"></div>
   <div class="up">
      <img src="src/logo.png" alt="logo" class="logo2"></img>
      <br><br><br><br>
      <form id="uploadForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
       <input name="email" class="button b2 sup" id="text" type="textbox" value="Email" onClick="select()">
       <input name="uname" class="button b2 sup" id="text" type="textbox" value="User Name" onClick="select()">
       <input name="password"class="button b2 sup" id="text" type="password" value="Password" onClick="select()">
       <input name="passwordagain"class="button b2 sup" id="text" type="password" value="Password" onClick="select()">
       <input name="submit"class="button b1 " type="submit" value="Submit" >
       <div>
          <span class="error"><?php echo $passwordErr;?></span>
          <span class="error"><?php echo $emailErr;?></span>
          <span class="error"><?php echo $nameErr;?></span>
          <span class="error"><?php echo $paaErr;?></span>
       </div>
      </form>
   </div>
</div>
<div class="map" id="googleMap" ></div>
<script src="js/ls.js"></script>
</body>
</html>