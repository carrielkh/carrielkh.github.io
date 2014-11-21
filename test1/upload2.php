<?php

    session_start();
    $user = 'root';
$password = 'root';
$db = 'forms1';
$host = 'localhost';
$port = 8889;

$link = mysql_connect(
   "$host:$port", 
   "root", 
   "root"
);
$db_selected = mysql_select_db(
   $db, 
   $link
);




if(!$link)

  {

  die('Error connecting to server :'.mysql_error());

  }



$result=mysql_query("SELECT email,password FROM upload1 WHERE email='$_POST[email]' && password='$_POST[password]'");

if(!mysql_fetch_array($result,MYSQL_ASSOC))

  {

header('Location: home.php');

  

  }

else

  {


 header('Location: map.html');

   

   

  }

 mysql_close($link);
 ?>
