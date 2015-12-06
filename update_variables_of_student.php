<head>

<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<?php
require 'data.php';

$oldstudentname= $_GET['oldstudent'];

$newstudentname=$_GET['name'];
$newstudentsurname=$_GET['surname'];
$newstudentdepartment=$_GET['department'];

$sql="UPDATE student SET name='$newstudentname',surname='$newstudentsurname',department='$newstudentdepartment' WHERE name='$oldstudentname'";
 
echo("STUDENT IS UPDATED!");
 
if (!mysql_query($sql,$connection))
  {
  die('Error: ' . mysql_error());}
	else{

}

?>
<input type="submit" name="add" class="btn" value="RETURN TO HOME PAGE" onclick="location='edit.php'"><br /><br /><br />