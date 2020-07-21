<?php
@ob_start();
session_start();
if ($_SESSION['session_name']) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bidding</title>
</head>
<body>

</body>
</html>

<?php
if (isset($_GET['b'])) {
$bid=$_GET['bid'];
$o=$_SESSION['session_name'];
$ybid=$_GET['bidamount'];
$connection=mysqli_connect('localhost','root','');
	mysqli_select_db($connection,"fib");
$query2= mysqli_query($connection,"update olexhibition set lbid='$ybid', bidowner='$o' where pid='$bid'");
if ($query2) {
	header('location:shop.php');
}
else{
	echo "not done";
}
}
}
else{
	header('location:register.php');
}
?>