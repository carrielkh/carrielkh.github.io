<?php

if($_POST["password"]==$_POST["passwordagain"] )
{

$con=mysql_connect("localhost","root","root");

if(!$con)

  {

  die('Error connecting to server :'.mysql_error());

  }
mysql_select_db("forms1",$con);
$value1 = $_POST['email'];
$value2 = $_POST['password'];
$value3 = $_POST['passwordagain'];
$value4 = $_POST['uname'];

$result=mysql_query("SELECT email FROM upload1 WHERE email='$value1'");

if(!mysql_fetch_array($result,MYSQL_ASSOC))

  {

$sql="INSERT INTO upload1(email, password,passwordagain,uname) VALUES('$value1','$value2','$value3','$value4')";

if(!mysql_query($sql,$con))

  {

  die('Error :'.mysql_error());

  }

 echo "You are registered. Congrats !!!";



 }

else

 {

 echo "Username Already exists ! ";



 }

 mysql_close($con);

}

else

{

if($_POST["password"]!=$_POST["passwordagain"]){

  echo "Password mismatch <br />";}

else

{  echo "Invalid Username  <br />";

echo "<a href='homepage.html'> Go back to login page </a>";}

}

/*
39
1) We shouldnt allow similar usernames. (Y)
40
2) make the go back to login page work. (Y)
41
3) We shouldnt allow null usernames and passwords.(Y)
42
*/

?>
