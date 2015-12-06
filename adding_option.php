<head>

<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<br />
<?php  
require 'data.php';

$studentIdcopy=$_GET['student_id_copy'];
$bookname = $_GET['bname'];


$sql="INSERT INTO studentbook (student_id,book)
VALUES('$studentIdcopy','$bookname')";
if (!mysql_query($sql,$connection))
  {
  die('Error: ' . mysql_error());
  } 
echo "VALUE IS INSERTED!";
?> 
<br /><br /><br />
<input type="submit" name="add" class="btn" value="RETURN TO HOME PAGE" onclick="location='edit.php'">