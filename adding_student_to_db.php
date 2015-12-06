<html>
<head>
<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<body>

<br/><br/>
<?php
require 'data.php';

$name = $_GET['name'];
$surname = $_GET['surname']; //this is line 32 and so on...
$department = $_GET['department'];
    
$sql="INSERT INTO student (name,surname,department)
VALUES('$name','$surname','$department')";

if (!mysql_query($sql,$connection))
  {
  die('Error: ' . mysql_error());
  }
  
  
  echo "VALUE IS ADDED!"
?>
<br/><br/><input type="submit" name="add" class="btn" value="RETURN TO HOME PAGE" onclick="location='edit.php'">

</body>
</html>