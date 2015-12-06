
<head>

<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<?php
require 'data.php';

$oldbook= $_GET['copybook'];

$newbook=$_GET['fname'];

$sql="UPDATE books SET Name='$newbook' WHERE Name='$oldbook'";
 
echo("VALUE IS UPDATED!");
 
if (!mysql_query($sql,$connection))
  {
  die('Error: ' . mysql_error());}
	else{

}

?>
<input type="submit" name="add" class="btn" value="RETURN TO HOME PAGE" onclick="location='edit.php'"><br /><br /><br />