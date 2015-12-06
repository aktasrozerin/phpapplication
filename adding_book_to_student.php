<html>
<body>
<?php
require 'data.php';

    
$sql="INSERT INTO student (name,surname,department)
VALUES('$_GET['row'],'$_GET['option'])";

if (!mysql_query($sql,$connection))
  {
  die('Error: ' . mysql_error());
  }
  
  
  
?>
<input type="submit" name="add" value="RETURN TO HOME PAGE" onclick="location='edit.php'">

</body>
</html>