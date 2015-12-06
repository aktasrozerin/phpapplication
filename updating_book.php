<?php
require 'data.php';

$get=mysql_query("SELECT Name from books");
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
<form action='update_book_in_db.php' method="get"> 
<br/>
 CHOOSE A BOOK TO UPDATE:
 <select id="option" name="bname"> 
<?php echo $option;?>
</select>

<input type="submit" name="add" class="btn" value="UPDATE BOOK" onclick="location='update_book_in_db.php'">

</form>
</body>
</html>