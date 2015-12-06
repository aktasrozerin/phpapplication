<!DOCTYPE html>
<html>
<head>
<title>Library Interface</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<body>
<h1>Editing the Student</h1>
<p>Choose whatever you want.</p>

<form action="adding_book.php" method="get">
<?php $studentid=$_GET['row'];?>
<input type="hidden" name="student_id" value="<?php echo $studentid;?>"/>
<input type="submit" name="add"  class="btn" value="ADD BOOK" onclick="location='adding_book.php?<?php $student_id;?>'"/><br/><br/>
</form>

<form action="delete_book.php" method="get">
<?php $studentid=$_GET['row'];?>
<input type="hidden" name="student_id" value="<?php echo $studentid;?>"/>
<input type="submit" name="delete"  class="btn" value="DELETE BOOK" onclick="location='delete_book.php?<?php $student_id;?>'"/><br/><br/>
</form>


<form action="print_book.php" method="get">
<?php $studentid=$_GET['row'];?>
<input type="hidden" name="student_id" value="<?php echo $studentid;?>"/>
<input type="submit" name="print"  class="btn" value="PRINT STUDENT'S BOOKS" onclick="location='print_book.php?<?php $student_id;?>'"/><br/><br/>

</form>
<input type="submit" name="add"  class="btn" value="RETURN TO HOME PAGE" onclick="location='edit.php'"><br /><br /><br />
</body>
</html>
