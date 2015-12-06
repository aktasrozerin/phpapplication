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
<head>

<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<body>
<form action="update_student_in_db.php" method="get"> 
<br/>
 CHOOSE A STUDENT TO UPDATE:
 <select id="option" name="bname"> 
<?php echo $option;?>
</select>

<input type="submit" name="add" class="btn" value="UPDATE STUDENT" onclick="location='update_student_in_db.php'" >

</form>
</body>
</html>