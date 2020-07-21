<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit" name="s">
</form>
</body>
</html>
<?php
if (isset($_POST['s'])) {
$j=$_FILES['file']['name']; 
move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
$con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,"nidhi");
 $query=mysqli_query($con,"insert into pic values('$j')");
}
?>