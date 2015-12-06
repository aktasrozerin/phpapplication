<head>
<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<?php
require 'data.php';

$get=mysql_query("SELECT name from student");
$option = '';
 while($row = mysql_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['name'].'">'.$row['name'].'</option>';
}
?>
<html>
<body>
<form action="delete_student_from_db.php" method="get"> 
<br/>
 CHOOSE A STUDENT TO DELETE:
 <select id="option" name="bname"> 
<?php echo $option;?>
</select>

<input type="submit" name="add" class="btn" value="DELETE STUDENT" onclick="location='delete_student_from_db.php'" >

</form>
</body>
</html>