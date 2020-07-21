<?php
@ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User LogIn</title>
	<meta charset="utf-8">
	   <link rel="icon" href="fiblogo.png" type="image/png">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
<style type="text/css">
	#signin{
		width: 500px;
		margin-left:50px;
		margin-top: 40px;
		display: none;
	}
	#signup{
		width: 500px;
		margin-left:50px;
		margin-top: 20px;
	}
	#button11{
		margin-left: 140px;
		background-color: black;
		box-shadow: 5px 10px 8px silver;
		width: 200px;
		height: 50px;
		color: white;
		border-top-left-radius: 100px;
		border-top-right-radius: 100px;
		border-bottom-left-radius: 100px;
		border-bottom-right-radius: 100px;
	}
	#button12{
		margin-left: 100px;
		background-color: black;
		box-shadow: 5px 10px 8px silver;
		width: 200px;
		height: 50px;
		color: white;
	}
	#button13{
		margin-left: -3px;
		position: absolute;
		margin-top: 8px;
		background-color: black;
		box-shadow: 5px 10px 8px silver;
		width: 200px;
		height: 50px;
	}
	body{
		background-image: url('a4.jpg');
		background-attachment: fixed;
		background-size: cover;
	}
</style>
    <script type="text/javascript">
    	function f2(){
    		document.getElementById('signin').style.display='none';
    		document.getElementById('signup').style.display='block';
    	}
    	function f3(){
    		document.getElementById('signin').style.display='block';
    		document.getElementById('signup').style.display='none';
    	}
function validateemail()  
{  
var x=document.myform.uname.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
    document.getElementById('em').style.display="block";
  document.getElementById('em').innerHTML="Please enter a valid e-mail";  
  return false;  
  }  
  else
  {
    document.getElementById('em').style.display="none";
  }
}  
</script>
</head>
<body>
<?php
include 'header1.php';
?>
<br><br>
<div style="background-color: #8c7373;width: 620px;height: 500px;margin-left: 300px;margin-top: 50px;position: absolute;border:5px solid transparent;box-shadow: 3px 7px 11px 8px black;">
	<br>
	<button id="button12" onclick="f2();">SIGNUP</button>
	<button id="button13" onclick="f3();">LOGIN</button>
	<br>
<!--<h1 style="color: white;margin-left: 210px;margin-top: 40px;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;font-size: 60px;">Log In</h1>-->
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="myform">
    <div id="signin">
      <input type="text" placeholder="Enter Email" name="uname" onkeyup="return validateemail();" required>
      <input type="password" placeholder="Enter Password" name="psw" required>
        <a href="forgotpsw1.php" style="color: white;text-decoration: none;">Forgot Password?</a>
      <input type="submit" name="s" id="button11" value="Login">
      <br>
      <p id="em" style="background-color:red;color:white;width:230px;height:20px;font-size:15px;position:absolute;padding-left:15px;display: none;margin-left: 130px;margin-top: 0px;"></p>
    </div>
</form>
<?php
if (isset($_POST['s'])) {
	$name=$_POST['uname'];
	$psw=$_POST['psw'];
	$connection=mysqli_connect('localhost','root','');
	mysqli_select_db($connection,'fib');
$query=mysqli_query($connection,"select * from register where email='$name' and password='$psw'");
$result=mysqli_fetch_array($query);
if (($result['email']==$name)&&($result['password']==$psw)) {
	session_start();
$_SESSION['session_name']=$name; //session creation
header('location:shop.php');
}
else
{
	header('location:crash.php');

}
mysqli_close($connection);
}
?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="myform1">
    <div id="signup">
      <input type="text" placeholder="Enter Email" name="uname1" onkeyup="return validateemail();" required>
             <input type="text" placeholder="Enter full name" name="name1" required>

      <input type="password" placeholder="Enter Password" name="psw1" required>
      <input type="password" placeholder="Enter Password" name="psw2" required>

      <input type="submit" name="s1" id="button11" value="Sign Up">
      <br>
      <p id="em" style="background-color:red;color:white;width:230px;height:20px;font-size:15px;position:absolute;padding-left:15px;display: none;margin-left: 130px;margin-top: 0px;"></p>
    </div>
  </form>
</div>
</body>

<?php
include 'footer1.php';
?>
</html>


<?php
if (isset($_POST['s1'])) {
	$email1=$_POST['uname1'];
	$fname=$_POST['name1'];
	$password1=$_POST['psw1'];
	$password2=$_POST['psw2'];
$d=random_int(10, 500);
	if ($password1!=$password2) {
  echo "<p style=color:red;position:absolute;margin-top:500px;margin-left:110px;>"."PASSWORDS DO NOT MATCH."."</p>";
}
else{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"fib");
$query=mysqli_query($con,"insert into register values('$email1','$fname','$password1','$d')");
if ($query===true) {
header('location:shop.php');
}
else{
header('location:crash.php');
}
}
}
?>