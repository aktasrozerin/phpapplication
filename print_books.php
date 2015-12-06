<html>
<head>

<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<body>
<form><br />		
<table align="center" border="1">
<tr>
<td width="100" bgcolor="#CCCCCC"><strong>BOOK NAME</strong></td>
<td width="100" bgcolor="#CCCCCC"><strong>ENTERANCE DATE</strong></td>
<td width="100" bgcolor="#CCCCCC"><strong>PUBLISHER</strong></td>
<td width="100" bgcolor="#CCCCCC"><strong>EDITION</strong></td>
<?php
require 'data.php';

$query=mysql_query("SELECT * FROM books");

$book_name="";
$book_date="";
$book_pub="";
$book_ed="";
while($row = mysql_fetch_object($query)){
	$book_name =$row->Name;	
	$book_date =$row->Enterance_date;
	$book_pub =$row->Publisher;
	$book_ed =$row->Edition;
	
?>
<tr>
<td><?php echo $book_name;?></td>
<td><?php echo $row->Enterance_date;?></td>
<td><?php echo $row->Publisher;?></td>
<td><?php echo $row->Edition;?></td>
</tr>
<?php
}
?>
</table>
</form>
<input type="submit" name="add" class="btn" value="RETURN TO HOME PAGE" onclick="location='edit.php'">
</body>
</html>