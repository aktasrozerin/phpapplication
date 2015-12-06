
<html>
<head>

<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<body>
<!--<h1>Editing the Student</h1>
//<p>Choose whatever you want to alter the books.</p>
-->
<form action="update_variables_of_book.php" method="get">
<br />
Enter the new book name: <input type="text" name="fname"><br /><br />

<?php $book=$_GET['bname']; 
echo $book;
?>

<input type="hidden" name="copybook" value="<?php echo $book;?>">
<input type="submit" name="add" class="btn" value="UPDATE THE BOOK" onclick="location='update_variables_of_book.php'">
</form>
</body>
</html>