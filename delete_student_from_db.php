
<br />
<head>

<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<?php  
require 'data.php';
$studentname = $_GET['bname'];

$sql="DELETE FROM student WHERE Name='$studentname'";
if (!mysql_query($sql,$connection))
  {
  die('Error: ' . mysql_error());
  } 
echo "STUDENT IS DELETED FROM LIBRARY!";
?> 
<br /><br /><br />

<input type="submit" name="add" class="btn" value="CLICK HERE TO DELETE ANOTHER STUDENT" onclick="location='delete_student.php'"><br /><br />
<input type="submit" name="add" class="btn" value="CLICK HERE TO RETURN TO HOME PAGE" onclick="location='edit.php'">