<?php
require 'data.php';

$student_id_copy = $_GET['student_id'];

$get=mysql_query("SELECT book FROM studentbook WHERE student_id='$student_id_copy'");
$option = '';
 while($row = mysql_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['book'].'">'.$row['book'].'</option>';
}
?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<body>
<form action="delete_option.php" method="get"> 
<br/>
 CHOOSE A BOOK TO DELETE:
 <select id="option" name="bname"> 
<?php echo $option;?>
</select>



<input type="hidden" name="student_id_copy" value="<?php echo $student_id_copy;?>"/>
<input type="submit" name="add" class="btn" value="DELETE BOOK" onclick="location='delete_option.php?<?php $student_id;?>'" >

</form>
</body>
</html>