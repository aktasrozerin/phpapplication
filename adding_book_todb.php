<?php

require 'adding.php';
require 'data.php';
   
              
$sql="INSERT INTO studentbook (book)
VALUES('$_GET[fname]')"; 


 
if (!mysql_query($sql,$connection))
  {
  die('Error: ' . mysql_error());
  }
?>
