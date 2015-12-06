<?php
require 'data.php';

$get=mysql_query("SELECT Name from Books");
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
<form action="deleting_book_for_good.php" method="get"> 
<br/>
 CHOOSE A BOOK TO DELETE:
 <select id="option" name="bname"> 
<?php echo $option;?>
</select>

<input type="submit" name="add" class="btn" value="DELETE BOOK" onclick="location='deleting_book_for_good.php>'" >

</form>
</body>
</html>