<html>
<head>

<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<body>
<br /><br />
 <?php 
require 'data.php';

$bookk=$_GET['fname']; 
$enterance=$_GET['ename'];
$publisher=$_GET['pname'];
$edition=$_GET['edname'];

if($_GET['fname']!=NULL){
$sql="INSERT INTO books (book_id,Name,Enterance_date,Publisher,Edition)
VALUES('','$bookk','$enterance','$publisher','$edition')";
 
echo("VALUE IS INSERTED!");
 
if (!mysql_query($sql,$connection))
  {

  die('Error: ' . mysql_error());
  }
}
else
echo"YOU DIDN'T INSERT ANYTHING!PLEASE TYPE ATTRIBUTES CORRECTLY!.";

?>
<br /><br />
<input type="submit" name="add" class="btn" value="RETURN TO ADDING PAGE" onclick="location='adding.php'"><br /><br /><br />
<input type="submit" name="add" class="btn" value="RETURN TO HOME PAGE" onclick="location='edit.php'">

</body>
</html>