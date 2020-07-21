<?php
@ob_start();
include 'header.php';
?>
<br><br>
<html>
<head>
	<title>Admin LogIn</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	#signin{
		width: 500px;
		margin-left:60px;
		margin-top: -80px;
	}
	.imgcontainer{
		width: 300px;
		height: 300px;
		margin-left: 130px;
	}
	body{
		background-image: url('a14.jpg');
		background-attachment: fixed;
    background-size: cover;
	}
	 input[type='text']{
    box-shadow: 5px 10px 8px blue;
    border-top-left-radius: 100px;
    border-top-right-radius: 100px;
    border-bottom-left-radius: 100px;
    border-bottom-right-radius: 100px;
  }
  input[type='password']{
    box-shadow: 5px 10px 8px blue;
    border-top-left-radius: 100px;
    border-top-right-radius: 100px;
    border-bottom-left-radius: 100px;
    border-bottom-right-radius: 100px;
  }
  #button1{
    margin-left: 150px;
    background-color: black;
    box-shadow: 5px 10px 8px blue;
    width: 200px;
    color: white;
    height: 50px;
    border-top-left-radius: 100px;
    border-top-right-radius: 100px;
    border-bottom-left-radius: 100px;
    border-bottom-right-radius: 100px;
  }
</style>
  <script type="text/javascript">
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
<br><br>
<div style="background-color: transparent;width: 620px;height: 500px;margin-left: 350px;position: absolute;opacity: 0.7;border:5px solid transparent;box-shadow: 7px 8px 11px 16px black;">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="get" name="myform">
    <div class="imgcontainer">
      <img src="admin.png" alt="Avatar" class="avatar" width="200" height="200" style="margin-left: 65px;margin-top: 20px;">
    </div>

    <div id="signin">
      <input type="text" placeholder="Enter Username" name="uname" onkeyup="return validateemail();" required>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="s" id="button1">Login</button>
      <br>
       <p id="em" style="background-color:red;color:white;width:230px;height:20px;font-size:15px;position:absolute;padding-left:15px;display: none;margin-left: 140px;margin-top: 0px;"></p>
    </div>
  </form>
</div>
<?php
include 'footer.php';
?>
</body>
</html>
<?php
if (isset($_GET['s'])) {
	$name=$_GET['uname'];
	$psw=$_GET['psw'];
	$connection=mysqli_connect('localhost','root','');
	mysqli_select_db($connection,'fib');
$query=mysqli_query($connection,"select * from admin where email='$name' and password='$psw'");
$result=mysqli_fetch_array($query);
if (($result['email']==$name)&&($result['password']==$psw)) {
session_start();
$_SESSION['session_name']=$name; //session creation
header('location:admin.php');
}
else
{
?>
<script type="text/javascript">
  alert('CAN NOT LOGIN. PLEASE MAKE SURE THAT YOU ARE A VALID ADMIN');
</script>
<?php
}
mysqli_close($connection);
}

?>