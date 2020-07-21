<?php
@ob_start();
session_start();
if(isset($_SESSION['session_name']))
{
	include 'header1.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<link rel="icon" href="fiblogo.png" type="image/png">
	   	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <style type="text/css">
		#admin,#user,#home,#about,#contact,#ffib{
			display: none;
		}
		#signout,#change,#upbid,#cart{
			display: block;
		}
	</style>
</head>
<body>
<h1 style="text-align: center;color: black;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;" class="shake">PAYMENT</h1>
<hr style="color: black;">
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	<h3 style="color: black;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;text-align: center;">Fill in the details carefully for COD</h3>
	<div style="width: 700px;height: 400px;background-color: #101010;margin-left: 300px;padding-left: 200px;">
		<br>
	<input type="text" name="name" placeholder="Enter your full name" style="width: 300px;border-top-left-radius: 100px;border-top-right-radius: 100px;border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;width: 300px;position: absolute;margin-top: 10px;" required>
	<br>
	<input type="contact" name="contact" placeholder="Enter your contact number" style="width: 400px;border-top-left-radius: 100px;border-top-right-radius: 100px;border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;width: 300px;position: absolute;margin-top: 60px;height: 50px;box-shadow: 5px 8px 10px white;" required>
	<br>
	<input type="text" name="address" placeholder="Enter your full address" style="width: 400px;border-top-left-radius: 100px;border-top-right-radius: 100px;border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;width: 300px;position: absolute;margin-top: 110px;" required>
	<br>
	<select name="s1" style="margin-top: 160px;margin-left: 100px;" required>
	<option>City</option>
	<option value="Chandigarh">Chandigarh</option>
	<option value="Amritsar">Amritsar</option>
	<option value="Mohali">Mohali</option>
	<option value="Mumbai">Mumbai</option>
	<option value="Delhi">Delhi</option>
	<option value="Gurugram">Gurugram</option>
	<option value="Pune">Pune</option>
	<option value="Shimla">Shimla</option>
	<option value="Panchkula">Panchkula</option>
	<option value="Kharar">Kharar</option>
	<option value="Jalandhar">Jalandhar</option>
	<option value="Chennai">Chennai</option>
</select>
<br>
<input type="number" name="pin" placeholder="Enter PIN CODE" style="width: 300px;border-top-left-radius: 100px;border-top-right-radius: 100px;border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;width: 300px;position: absolute;margin-top: 10px;height: 50px;box-shadow: 5px 8px 10px white;" required>
<input type="submit" name="s" style="width: 150px;border-top-left-radius: 100px;border-top-right-radius: 100px;border-bottom-left-radius: 100px;border-bottom-right-radius: 100px;width: 300px;position: absolute;margin-top: 80px;height: 50px;background-color: orange;color: white;" value="DONE">
</form>

<?php
if (isset($_POST['s'])) {
$a=$_POST['name'];
$c=$_POST['contact'];
$d=$_POST['address'];
$f=$_GET['bid'];
$g=$_POST['s1'];
$i=$_POST['pin'];
$y=date("Y-m-d");
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,"fib");
 $query=mysqli_query($con,"insert into placedorder values('$a','$c','$d','$g','$i','$f','$y')");
  if ($query) {
 	echo "<p style=color:red;position:absolute;margin-top:-700px;margin-left:300px;>"."ORDER PLACED SUCCESSFULLY"."</p>";
 }
 else{
 	echo "<p style=color:red;position:absolute;margin-top:-500px;margin-left:300px;>"."please make sure that all details are correct."."</p>";
 }
 mysqli_close($con);
}
?>
</body>
</html>

<?php
}
else {
header('location:register.php');
}
?>
