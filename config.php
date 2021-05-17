<?php
  session_start();
 $DB_SERVER ='localhost';
 $DB_USERNAME='root';
 $DB_Password='';
 $DB_DATABASE='testdb';
 $conn=mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_Password,$DB_DATABASE);
  if(!$conn){
      echo 'connection failed';
  }

?>