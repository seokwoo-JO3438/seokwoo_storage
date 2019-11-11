<?php
 session_start();

 $db = new mysqli("localhost","root","","host");
 $db->set_charset("utf8");

 function mq($sql){
   global $db;
   return $db->query($sql);
 }

 if (mysqli_connect_errno()) {
    die('Connect Error: '.mysqli_connect_error());
}


 ?>
