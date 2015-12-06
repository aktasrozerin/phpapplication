
<html>
<head>

<link rel="stylesheet" type="text/css" href="css_generator.css">
</head>
<body>

<h1>Enter new variables</h1>
<br/>
<form action="update_variables_of_student.php" method="get">


Name      :
<br/><input type="text" name="name"><br/>
Surname   :
<br/><input type="text" name="surname"><br/>
Department:
<br/><input type="text" name="department"><br/>

<?php $student=$_GET['bname']; 

?>

<input type="hidden" name="oldstudent" value="<?php echo $student;?>">

<input type="submit" name="add" class="btn" value="UPDATE STUDENT" onclick="location='update_variables_of_student.php'">
</form>
</body>
</html>