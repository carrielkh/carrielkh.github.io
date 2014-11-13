<?php

    session_start();

$con=mysql_connect("localhost","root","root");

if(!$con)

  {

  die('Error connecting to server :'.mysql_error());

  }

mysql_select_db("forms1",$con);

$result=mysql_query("SELECT email,password FROM upload1 WHERE email='$_GET[email]' && password='$_GET[password]'");

if(!mysql_fetch_array($result,MYSQL_ASSOC))

  {

  echo "Wrong Login. Go back and try again.";

  

  }

else

  {


 header('Location: map.html');

   

   

  }

 mysql_close($con);
 ?>
