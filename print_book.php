<html>
<head>

<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<body>
<form><br />		
<table align="center" border="1">
<tr>
<td width="100" bgcolor="#CCCCCC"><strong>BOOK NAME</strong></td></tr>
<?php
require 'data.php';
$stid = $_GET['student_id'];
//echo $stid;
$query=mysql_query("SELECT * FROM studentbook WHERE student_id='$stid'");

$book_name="";
while($row = mysql_fetch_object($query)){
	$book_name =$row->book;
	
	
?>
<tr>
<td><?php echo $book_name;?></td>
</tr>
<?php
}
?>

</table>
</form>
<input type="submit" name="add" class="btn" value="RETURN TO HOME PAGE" onclick="location='edit.php'">
</body>
</html>

