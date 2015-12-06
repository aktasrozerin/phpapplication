<html>
<head>
<title>Library Interface</title>
<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>

<body>
<form action="main_page.php" method="get"><br />		
<table align=center border="1">
<tr>
<td width="100" bgcolor="#CCCCCC"><strong>CHOOSE</strong></td>
<td width="100" bgcolor="#CCCCCC"><strong>ID</strong></td>
<td width="100" bgcolor="#CCCCCC"><strong>NAME</strong></td>
<td width="100" bgcolor="#CCCCCC"><strong>SURNAME</strong></td>
<td width="100" bgcolor="#CCCCCC"><strong>DEPARTMENT</strong></td>
</tr>
<?php
require 'data.php';
$query=mysql_query("SELECT * FROM student ");
$student_id='';
while($row = mysql_fetch_object($query))
{

	$student_id=$row->student_id;
	
?>
<tr>
<td><a href='main_page.php?row=<?php echo $student_id;?>'>EDIT</a></td>
<td><?php echo $row->student_id;?></td>
<td><?php echo $row->name;?></td>
<td><?php echo $row->surname;?></td>
<td><?php echo $row->department;?></td>

</tr>
<?php
}
?>
</table>
<br /><br /><br />

</form>

<form action="adding.php" method="get">

<input type="submit" name="ekle" class="btn" value="ADD BOOK TO THE LIBRARY" onclick="location='adding.php'"><br/><br/>
</form>

<form action="adding_student.php" method="get">
<input type="submit" class="btn" name="add" value="ADD STUDENT TO THE LIBRARY" onclick="location='adding_student.php'"><br/><br/>
</form>

<form action="deleting_book_from_db.php" method="get">
<input type="submit" name="ekle" class="btn" value="DELETE BOOK FROM THE LIBRARY" onclick="location='deleting_book_from_db.php'"><br/><br/>
</form>

<form action="delete_student.php" method="get">
<input type="submit" class="btn" value="DELETE STUDENT FROM THE LIBRARY" onclick="location='delete_student.php'"><br/><br/>
</form>

<form action="updating_student.php" method="get">
<input type="submit" class="btn" name="add" value="UPDATE A STUDENT IN THE LIBRARY" onclick="location='updating_student.php'"><br/><br/>
</form>

<form action="updating_book.php" method="get">
<input type="submit" class="btn" name="ekle" value="UPDATE A BOOK IN THE LIBRARY" onclick="location='updating_book.php'"><br/><br/>
</form>

<form action="print_books.php" method="get">
<input type="submit" name="print" class="btn" value="PRINT ALL THE BOOKS" onclick="location='print_books.php'"><br/><br/>
</form>


</body>
</html>

