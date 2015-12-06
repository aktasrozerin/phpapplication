<?php
require 'data.php';
 $get=mysql_query("SELECT Name FROM books");
$option = '';
 while($row = mysql_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['Name'].'">'.$row['Name'].'</option>';
}
?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<body>
<form action="adding_option.php" method="get"> 
<br/>
 CHOOSE A BOOK:
 <select id="option" name="bname"> 
<?php echo $option;?>
</select>

<?php 
$student_id_copy = $_GET['student_id'];?>

<input type="hidden" name="student_id_copy" value="<?php echo $student_id_copy;?>"/><br /><br />
<input type="submit" name="add"  class="btn" value="ADD BOOK" onclick="location='adding_option.php?<?php $student_id;?>'" >

</form>
</body>
</html>