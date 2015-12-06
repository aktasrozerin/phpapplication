<head>

<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<?php  
require 'data.php';

$studentIdcopy=$_GET['student_id_copy'];
$bookname = $_GET['bname'];

$sql="DELETE FROM studentbook WHERE student_id='$studentIdcopy' AND book='$bookname'";
if (!mysql_query($sql,$connection))
  {
  die('Error: ' . mysql_error());
  } 
echo "VALUE IS DELETED!";
?> 

<input type="submit" name="add"  class="btn" value="RETURN TO HOME PAGE" onclick="location='edit.php'"><br /><br /><br />