<head>

<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<br />
<?php  
require 'data.php';
$bookname = $_GET['bname'];


$sql="DELETE FROM books WHERE Name='$bookname'";
if (!mysql_query($sql,$connection))
  {
  die('Error: ' . mysql_error());
  } 
echo "BOOK IS DELETED FROM LIBRARY!";
?> 
<br /><br /><br />
<input type="submit" name="add" value="CLICK HERE TO RETURN TO HOME PAGE" onclick="location='edit.php'">