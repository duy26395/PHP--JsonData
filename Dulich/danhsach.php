<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'dulich';

 $dblink = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  $dblink->set_charset("utf8");

//Check connection was successful
  if ($dblink->connect_errno) {
     printf("Failed to connect to database");
     exit();
  }

  $result = $dblink->query("SELECT * FROM dia_diem");


  while ( $row = $result->fetch_assoc())  {
  $dbdata[]= $row;
  }   

   echo json_encode($dbdata, JSON_UNESCAPED_UNICODE); 
?>
